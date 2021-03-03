<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('form'); //form.blade.php
    }

    public function welcome(){
        return view('welcome'); //welcome.blade.php
    }

    public function welcome_pos(Request $request){
        //dd($request->all());
        $namaDepan = $request["first_name"];
        $namaBelakang = $request["last_name"];
        return "<h1>SELAMAT DATANG! $namaDepan $namaBelakang</h1>
        <h2>Terima kasih telah bergabung di Sanberbook. Social Media kita bersama!</h2>"; //method post welcome.blade.php
    }
}
