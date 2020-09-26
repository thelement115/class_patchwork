<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelpController extends Controller
{
    public function index()
    {
        return view('help.contact');
    }

    public function information(){
        return view('help.information');
    }
}
