<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function showform() {
        return view('registration');
    }
    public function signUp(Request $req) {
        //dd($req);
        //print_r($req->all());

        return redirect()->route('registrationpg')->withInput();
    }
}
