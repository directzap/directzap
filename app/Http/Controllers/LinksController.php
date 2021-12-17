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
        $link = Link::create([
            'name' => $request->link_name,
            'precell' => $request->precell,
            'dominio' => $request->dominio,
            'user_id' => auth()->user()->id
        ]);

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
        $collaborators = Collaborator::where('users_id', auth()->user()->id)
            ->whereNotIn('id', $remove_collaborators)
            ->get();
        return response()->json($collaborators);
    }

    public function addCollaborators(Request $request, $id)
    {
        # code...
    }
}
