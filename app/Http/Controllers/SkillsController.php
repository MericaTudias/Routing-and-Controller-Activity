<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function show($id){
        $data = array(
            "Skills" => "Mabait naman",
        );

        return view('Skills', ["data" => $data]);
    }

    public function AboutMe(){
        return view('Hobbies');
    }

    public function Hobbies(){
        return view('Hobbies');
    }
}
