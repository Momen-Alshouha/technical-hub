<?php

namespace App\Http\Controllers;

use App\Models\RoadmapsCategory;
use Illuminate\Http\Request;

class Roadmap extends Controller
{
    public function roadmapsCategories()
    {
        $roadmapsCategories = RoadmapsCategory::all();
        return view('roadmaps',compact('roadmapsCategories'));
    }
    public function frontend()
    {
        return view('frontend');
    }
    public function backend()
    {
        return view('backend');
    }
    public function fullstack()
    {
        return view('fullstack');
    }
    public function devops()
    {
        return view('devops');
    }
}
