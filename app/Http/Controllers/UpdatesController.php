<?php

namespace App\Http\Controllers;

use App\Models\Update;
use App\Models\UpdateUser;
use App\Models\User;
use Illuminate\Http\Request;

class UpdatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $updates = Update::all();
        return view('pages.updates.index', [
            'updates' => $updates,
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
        if ($request->update_type == 'success') {
            $status = 'Em andamento';
        } else if ($request->update_type == 'danger') {
            $status = 'Atualizado';
        } else if ($request->update_type == 'warning') {
            $statzs = 'Em breve';
        }
        $update = Update::create([
            'title' => $request->update_title,
            'type' => $request->update_type,
            'message' => $request->update_message,
            'status' => $status,
        ]);
        $users = User::all();

        foreach ($users as $key => $user) {
            UpdateUser::create([
                'update_id' => $update->id,
                'user_id' => $user->id,
            ]);
        }

        return redirect()->back()->with('Success', 'Alerta criado com sucesso');
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
        //
    }
}
