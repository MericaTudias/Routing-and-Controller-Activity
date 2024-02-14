<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function show($id){
        $data = array(
            "Name" => "Merica Tudias",
            "Age" => "20",
            "Email" => "mericatudias33@gmail.com"
        );

        return view('AboutMe', ["data" => $data]);
    }
}
