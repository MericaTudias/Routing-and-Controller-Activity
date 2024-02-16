<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function show($id){
        $data = array(
            "Skills" => "Sleeping",
        );

        return view('Skills', ["data" => $data]);
    }
}
