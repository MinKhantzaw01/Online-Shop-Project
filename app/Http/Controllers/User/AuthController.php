<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('user.auth.login');
    }

    public function postLogin(Request $request)
    {
        if(User::where('email',$request->email)->first())
        {
            if(Auth::attempt($request->only('email','password')))
            {
                return redirect('/');
            } else {
                return redirect()->back()->with('danger','Email Not Found');
            }
        } else{
            return redirect()->back()->with('danger','Password Not Found');
        }
    }

    public function showRegister()
    {
        return view('user.auth.register');
    }

    public function postRegister(Request $request)
    {
        $file=$request->file('image');
        $file_name=uniqid(time()).$file->getClientOriginalName();
        $file_path="image/".$file_name;
        $file->storeAs('image',$file_name);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'image'=>$file_path,
        ]);

        return redirect(url('/login'))->with('success','Complete Register,Please Login!');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
