<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.login');
    }

    public function auth(Request $request){

        // dd($request->all());
        $request->validate([
                'name' => 'required|exists:users,name',
                'password' => 'required',
            ],
            [
                //costom massage
                'name.exists' => 'username ini belum tersedia',
                'name.required' => 'username harus diisi terlebih dahulu',
                'password.required' => 'password harus diisi terlebih dahulu'
            ],
         );

         $user = $request->only('name', 'password');

         

         if(Auth::attempt($user)){
            return redirect()->route('welcome');
         }else{
            return redirect()->back()->with('error', "gagal login, silahkan cek dan coba lagi!");
         }

    }

    public function indexRegister()
    {
        return view('auth.register');
    }

    public function registerAccount(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'name' => 'required|min:4|max:50',
            'password' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        return redirect('/login')->with('success', 'berhasil membuat akun!');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    
}
