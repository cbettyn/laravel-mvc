<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
      return "OK";
    }

    public function proses(Request $request){
      $namadepan = $request->input('first_name');
      $namabelakang = $request->input('last_name');
      return view('welcome', ['namadepan' => $namadepan, 'namabelakang' => $namabelakang]);
    }

}
