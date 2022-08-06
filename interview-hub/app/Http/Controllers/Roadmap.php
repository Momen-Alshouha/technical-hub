<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Roadmap extends Controller
{
    public function roadmaps() {
        return view('roadmaps');
    }
    public function frontend() {
        return view('frontend');
    }
    public function backend() {
        return view('backend');
    }
    public function fullstack() {
        return view('fullstack');
    }
    public function devops() {
        return view('devops');
    }



}
