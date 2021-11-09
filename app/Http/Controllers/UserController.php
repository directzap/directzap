<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Symfony\Component\Console\Input\Input;

use Image;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::where('id', auth()->user()->id)->first();
        return view('pages.user.index', [
            'user' => $user,
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
        //
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
        $user = User::where('id', auth()->user()->id)->first();
        // dd($request);
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $avatar = Str::lower('user' . auth()->user()->id . '.' . $file->getClientOriginalExtension());
            //Image::make($file)->resize(null,400)->save(public_path('/uploads/avatars/' . $avatar));
            $img = Image::make($file)->resize(400, 400, function ($constraint) {
                $constraint->aspectRatio();
                // $constraint->upsize();
            });
            $img->crop(400, 400);
            $img->save(public_path('/uploads/avatars/' . $avatar));
        }
        $user->fill([
            'name'  => $request->name,
            'username'  => $request->username,
            'avatar'  => $avatar,
            'company'  => $request->company,
        ]);

        $user->save();

        return redirect()->back()->with('success', 'Alterado com sucesso');
    }

    public function updatatePass(Request $request, $id)
    {

        if ($request->new_password != $request->confirm_password) {

            return redirect()->back()->with('error', 'Nova senha e confirmaçaõ de senha estão diferentes');
        } else if (Hash::check($request->password, auth()->user()->password)) {

            $user = User::where('id', auth()->user()->id)->first();
            $user->fill([
                'password'  => bcrypt($request->new_password),
            ]);
            $user->save();
            return redirect()->back()->with('success', 'Alterado com sucesso');
        } else {
            return redirect()->back()->with('error', 'Senha incorreta');
        }
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
