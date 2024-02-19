<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index()
    {
        $data=array(
            "skill 1"=>"Computer Assembly & Disassembly",
            "skill 2"=>"Technological Skills"
        );
        return view('Skills', ['data'=>$data]);
    }
}
