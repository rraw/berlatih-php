<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    public function create(){
        return view('pertanyaan.create'); //views/pertanyaan/create.blade.php
    }
}
