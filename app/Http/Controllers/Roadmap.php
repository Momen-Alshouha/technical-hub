<?php

namespace App\Http\Controllers;

use App\Models\Roadmap as ModelRoadmap;
use App\Models\RoadmapsCategory;
use App\Models\RoadmapStep;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class Roadmap extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display all roadmaps categories.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function roadmapsCategories() : View
    {
        $roadmapsCategories = RoadmapsCategory::all();
        return view('roadmaps_categories', compact('roadmapsCategories'));
    }

    /**
     * Display roadmaps belonging to a specific category.
     *
     * @param int $categoryId
     * @return \Illuminate\Contracts\View\View
     */
    public function roadmapsByCategory($categoryId) : View
    {
        $roadmapsByCategory = ModelRoadmap::where('cat_id', $categoryId)->get();
        $category = RoadmapsCategory::find($categoryId);
        return view('roadmapsByCategory', compact('roadmapsByCategory', 'category'));
    }

    /**
     * Display steps for a specific roadmap.
     *
     * @param int $roadmapId
     * @return \Illuminate\Contracts\View\View
     */
    public function roadmapSteps($roadmapId) : View
    {
        $roadmapSteps = RoadmapStep::where('roadmap_id', $roadmapId)->get();
        $roadmap = ModelRoadmap::find($roadmapId);
        return view('roadmap_steps', compact('roadmapSteps', 'roadmap'));
    }
}
