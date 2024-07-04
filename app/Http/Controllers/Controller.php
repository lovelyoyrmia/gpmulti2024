<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

abstract class Controller
{
    //
    public function attend(Request $request) 
    {
        $name = $request->name;
        $gereja = $request->gereja;

        dd($name);
    }
}
