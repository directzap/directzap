<?php

namespace App\Http\Controllers;

use App\Models\Collaborator;
use App\Models\Configuration;
use App\Models\User;
use Illuminate\Http\Request;

class CollaboratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collaborators = Collaborator::where('users_id', auth()->user()->id)->get();
        return view('pages.colaboradores.index', [
            'collaborators' => $collaborators,
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

        $config = Configuration::where('user_id', auth()->user()->id)->first();

        if ($config->collaborators < 8) {
            $colaborador = Collaborator::Create([
                'name' => $request->name,
                'message' => $request->message,
                'phone' => $request->phone,
                'users_id' =>  auth()->user()->id,
            ]);
            $count_collaborators = $config->collaborators + 1;
            $config->fill([
                'collaborators'  => $count_collaborators,
            ]);

            $config->save();
            return redirect()->back()->with('success', 'Cadastrado com sucesso');
        } else {
            return redirect()->back()->with('error', 'Você possui o número máximo de colaboradores');
        }
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
        $collaborator = Collaborator::find($id);
        $collaborator->delete();

        // $user = Configuration::where('user_id', auth()->user()->id)->first();
        // $count_collaborators = $user->collaborators - 1;
        // $user->fill([
        //     'collaborators'  => $count_collaborators,
        // ]);
        // $user->save();
        return response()->json(true);
    }

    public function distribution(Request $request)
    {
        $config = Configuration::updateOrCreate(
            [
                'user_id' => auth()->user()->id
            ],
            [
                'distribution' => $request->distribution
            ]
        );

        return redirect()->back();
    }

    public function pausePlay($id)
    {
        $collaborator = Collaborator::find($id);
        if ($collaborator->active == 1) {
            $active = 0;
        } else {
            $active = 1;
        }

        $collaborator->fill([
            'active' => $active
        ]);
        $collaborator->save();

        return response()->json($active);
    }

    public function resetClick($id)
    {
        $collaborator = Collaborator::find($id);
        $collaborator->fill([
            'count' => 0
        ]);
        $collaborator->save();

        return response()->json(true);
    }
}
