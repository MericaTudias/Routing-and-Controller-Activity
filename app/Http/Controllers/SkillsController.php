<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index(){
        $data = array(
            "Skills" => "Mabait naman",
            "Programming Language" => "Java, Python, HTML, CSS, Javascript, PHP",
            "Designing" => "user interface (UI) and user experience (UX)"
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
