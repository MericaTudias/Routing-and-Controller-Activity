<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function show($id){
        $data = array(
            "Name" => "Merica Tudias",
            "Age" => "20",
            "Email" => "mericatudias33@gmail.com",
            "Date of Birth" => "October 13, 2003",
            "Place of Birth" => "Baguio City",
            "Gender" => "Female",
            "Citizenship" => "Filipino",
            "Height" => "162 (di ko sureee)",
            "Weight" => "47kgs (di ko din sureee hehe)",
            "Language/Dialect" => "English, Filipino, Ilokano, Ibaloi",
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
