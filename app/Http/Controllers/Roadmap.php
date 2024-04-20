<?php

namespace App\Http\Controllers;

use App\Models\Roadmap as ModelRoadmap;
use App\Models\RoadmapsCategory;
use App\Models\RoadmapStep;
use Illuminate\Http\Request;

class Roadmap extends Controller
{
    public function roadmapsCategories()
    {
        $roadmapsCategories = RoadmapsCategory::all();
        return view('roadmaps_categories', compact('roadmapsCategories'));
    }
    public function roadmapsByCategory($categoryId)
    {
        $roadmapsByCategory = ModelRoadmap::all()->where('cat_id',$categoryId);
        $category = RoadmapsCategory::find($categoryId);
        return view('roadmapsByCategory', compact('roadmapsByCategory','category'));
    }

    public function roadmapSteps($roadmapId) {
        $roadmapSteps = RoadmapStep::all()->where('roadmap_id',$roadmapId);
        $roadmap = ModelRoadmap::find($roadmapId);
        return view('roadmap_steps', compact('roadmapSteps','roadmap'));
    }
}
