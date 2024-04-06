<?php

namespace App\Http\Controllers;

use App\Models\Roadmap;
use App\Models\RoadmapStep;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class RoadmapStepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id): View
    {
        $steps = $this->getRoadmapStepsAndRoadmapNameByRoadmap($id);
        return view('admin.roadmaps.steps.index', compact('steps'));
    }

    public function getRoadmapStepsAndRoadmapNameByRoadmap($id)
    {
        $roadmapName = Roadmap::select('name')->where('id', $id)->first();

        $steps = RoadmapStep::where('roadmap_id', $id)
            ->orderBy('sequence')
            ->get();

        $steps = $steps->map(function ($step) use ($roadmapName) {
            return [
                'roadmapName' => $roadmapName->name,
                'roadmapId' => $step->roadmap_id,
                'id' => $step->id,
                'title' => $step->title,
                'description' => $step->description,
                'sequence' => $step->sequence,
            ];
        });

        return $steps;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RoadmapStep  $roadmapStep
     * @return \Illuminate\Http\Response
     */
    public function show(RoadmapStep $roadmapStep)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RoadmapStep  $roadmapStep
     * @return \Illuminate\Http\Response
     */
    public function edit(RoadmapStep $roadmapStep)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RoadmapStep  $roadmapStep
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RoadmapStep $roadmapStep)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RoadmapStep  $roadmapStep
     * @return \Illuminate\Http\Response
     */
    public function destroy(RoadmapStep $roadmapStep)
    {
        //
    }
    public function destroyAll($roadmapId)
    {
        RoadmapStep::where('roadmap_id', $roadmapId)->delete();
        return redirect()->back()->with('message', 'All roadmap steps  have been deleted.');
    }
}
