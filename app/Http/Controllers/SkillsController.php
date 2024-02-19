<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index()
    {
        $data=array(
            "skill1"=>"Computer assembly & disassembly",
        );
        return view('Skills', ['data'=>$data]);
    }
}
