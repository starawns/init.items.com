<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SportsController extends Controller
{
    public function index(){
        return view('front/sports/index', ['title'=>'体育赛事']);
    }
}
