<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function index(){
        $data = array(
            "Name" => "Merica Tudias",
            "Age" => 20,
            "University" => "University of the Cordilleras",
            "Year" => "3rd year",
            "Course" => "Bachelor of Science in Infromation Technology",
            "Major" => "Web Development",
        );

        return view('AboutMe', ["data" => $data]);
    }

    public function Hobbies(){
        return view('Hobbies');
    }

    public function Skills(){
        return view('Skills');
    }
}
