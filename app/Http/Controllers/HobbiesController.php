<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function show($id){
        $data = array(
            "Hobbies" => "Reading",
        );

        return view('Hobbies', ["data" => $data]);
    }
}
