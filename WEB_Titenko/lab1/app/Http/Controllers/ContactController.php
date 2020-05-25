<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $req){
        //dd($req->input('name'));

        $req->validate([
           'email' => 'required|min:5|max:50'

        ]);
    }
}
