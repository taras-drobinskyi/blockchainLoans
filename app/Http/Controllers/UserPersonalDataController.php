<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserPersonalDataController extends Controller
{
    //
    protected function create (){
        return view('auth.stage2');

    }
}
