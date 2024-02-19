<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function index()
    {
        $data=array(
            "hobby 1"=>"Playing Online Games",
            "hobby 2"=> "Watching Movies/Series" 
        );
        return view('Hobbies', ['data'=>$data]);
    }
}
