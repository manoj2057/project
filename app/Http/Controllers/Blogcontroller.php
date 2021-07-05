<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class Blogcontroller extends Controller
{
    public function index(){
        $posts= post::latest()->get();
        return view('home', ['posts'=>$posts ] );
    }


}
