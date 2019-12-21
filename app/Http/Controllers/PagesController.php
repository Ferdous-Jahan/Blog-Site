<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "data passing from controller with compact(____)";
        return view('pages.index', compact('title'));
    }
}