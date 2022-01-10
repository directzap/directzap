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
    public function index()
    {
        $user = User::where('id', auth()->user()->id)->first();
        return view('pages.user.index', [
            'user' => $user,
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $user = User::find($id);

        return response()->json($user);
    }

    public function edit($id)
    {
        //
    }

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

    public function pixelFacebook(Request $request)
    {
        $user = User::where('id', auth()->user()->id)->first();
        $user->fill([
            'pixel_facebook'  => $request->pixel_facebook
        ]);
        $user->save();
        return response()->json(true);
    }
    public function pixelGtm(Request $request)
    {
        $user = User::where('id', auth()->user()->id)->first();
        $user->fill([
            'pixel_gtm'  => $request->pixel_gtm
        ]);
        $user->save();
        return response()->json(true);
    }

    public function userActive(Request $request)
    {
        $user = User::where('email', $request->email_active)->first();

        if ($user == null) {
            return redirect()->back()->with('Sucess', 'Conta não encontrada');
        }
        $user->active = 1;
        $user->save();

        return redirect()->back()->with('Sucess', 'Conta ativada com sucesso');
    }

    public function destroy($id)
    {
        $user = User::destroy($id);
        if ($user == null) {
            return response()->json(false);
        }
        return response()->json(true);
    }
}
