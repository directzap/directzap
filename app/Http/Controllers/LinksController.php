<?php

namespace App\Http\Controllers;

use App\Models\Collaborator;
use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LinksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $links = Link::where('user_id', auth()->user()->id)->get();
        $links_collaborator = [];
        foreach ($links as $key => $link) {
            $links_collaborator[$key] = $link;
            $links_collaborator[$key]['qtd_collaborators'] = DB::table('collaborator_link')
                ->where('link_id', $link->id)->count();
        }
        return view('pages.links.index', [
            'links' => $links
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $links = Link::where('user_id', auth()->user()->id)->count();
        if ($links <= auth()->user()->qtd_links) {

            $link = Link::create([
                'name' => $request->link_name,
                'precell' => $request->precell,
                'dominio' => $request->dominio,
                'user_id' => auth()->user()->id
            ]);
        }

        return redirect()->back()->with('success', 'Cadastro realizado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $link = Link::find($id);
        $link->delete();

        return response()->json(true);
    }

    public function showAddCollaborators($id)
    {
        $links = DB::table('collaborator_link')->where('link_id', $id)->get();
        $remove_collaborators = [];
        foreach ($links as $key => $link) {
            $remove_collaborators[] = $link->collaborator_id;
        }
        $records = Collaborator::where('users_id', auth()->user()->id)
            ->whereNotIn('id', $remove_collaborators)
            ->get();


        $collaborators = [];
        foreach ($records as $key => $record) {
            $collaborators[$key]['colaborator'] = $record;
            $links = Link::join('collaborator_link', 'collaborator_link.link_id', '=', 'links.id')
            ->where('collaborator_link.collaborator_id', $record->id)->get();
            $collaborators[$key]['links'] = $links;
        }
        return response()->json($collaborators);
    }

    public function addCollaborators(Request $request)
    {
        $collaborators = $request->collaborator;
        foreach ($collaborators as $key => $collaborator) {
            DB::table('collaborator_link')->insert([
                'link_id' => $request->link,
                'collaborator_id' => $collaborator
            ]);
        }

        return redirect()->back();
    }

    public function collaboratorsLink($id)
    {
        $links = DB::table('collaborator_link')->where('link_id', $id)->get();
        $list_collaborators = [];
        foreach ($links as $key => $link) {
            $list_collaborators[] = $link->collaborator_id;
        }
        $collaborators = Collaborator::where('users_id', auth()->user()->id)
            ->whereIn('id', $list_collaborators)
            ->get();
        return response()->json($collaborators);
    }

    public function deleteCollaboratorLink(Request $request)
    {
        DB::table('collaborator_link')
            ->where('link_id', $request->link_id)
            ->where('collaborator_id', $request->collaborator_id)
            ->delete();

        return response()->json(true);
    }
}
