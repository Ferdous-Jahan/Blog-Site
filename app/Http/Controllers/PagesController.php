<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "data passing from controller with compact(____)";
        return view('pages.index', compact('title'));
    }

    public function about(){
        $title = "data passing from controller with ->with('___',___)";
        return view('pages.about')->with('title', $title);
    }

    public function services(){
        $data = array(
            'title' => 'our services',
            'services' => ['image manage', 'gallery', 'account']
        );
        return view('pages.services')->with($data);
    }
}