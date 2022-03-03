<?php

namespace App\Http\Controllers;

use App\Models\Alert;
use App\Models\AlertUser;
use App\Models\User;
use Illuminate\Http\Request;

class AlertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $data = $request->all();

        if ($request->type == 'success') {
            $status = 'Sucesso';
        } else if ($request->type == 'danger') { 
            $status = 'Cuidado';
        } else if ($request->type == 'warning') {
            $status = 'Atenção';
        }
        $data['status'] = $status;
        $alert = Alert::create($data);
        $users = User::all();

        foreach ($users as $key => $user) {
            AlertUser::create([
                'alert_id' => $alert->id,
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
