<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Homecontroller extends Controller
{
    public function index(){
        return view('Home.index');
    }
}
