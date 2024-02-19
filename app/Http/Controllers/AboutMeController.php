<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function index()
    {
        $data=array(
            "greetings"=>"Good Day!",
            "name"=>"Ricabhens",
            "age"=>21
        );
        return view('About_Me', ['data'=>$data]);
    }
}
