<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function index(){
        $data = array(
            "Hobbies" => "Reading, Binge Watching Movies and Series, Crocheting, Listening to Music and Podcasts",
        );

        return view('Hobbies', ["data" => $data]);
    }

    public function AboutMe(){
        return view('About Me');
    }

    public function Skills(){
        return view('Skills');
    }
}
