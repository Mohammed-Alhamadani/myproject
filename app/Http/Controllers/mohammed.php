<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mohammed extends Controller
{
    public function index(){
        return view('mohammed.index');
    }

    public function show(){
        return view('mohammed.show');
    }
    public function create(){
        return view('mohammed.create');
    }

    public function edit(){
        return view('mohammed.edit');
    }

}

