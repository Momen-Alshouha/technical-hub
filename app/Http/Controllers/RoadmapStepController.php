<?php

namespace App\Http\Controllers;

use App\Models\Roadmap;
use App\Models\RoadmapStep;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class RoadmapStepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id): View
    {
        $roadmap = DB::table('roadmaps')->where('id', $id)->first();
        $steps = $this->getRoadmapStepsAndRoadmapNameByRoadmap($id);
        return view('admin.roadmaps.steps.index', compact(['steps', 'roadmap']));
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
    public function create($id): View
    {
        $roadmap = Roadmap::findOrFail($id);
        return view('admin.roadmaps.steps.add', compact('roadmap'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id): RedirectResponse
    {
        $roadmap = Roadmap::findOrFail($id);

        // Get the maximum sequence number for the given roadmap
        $maxSequence = RoadmapStep::where('roadmap_id', $id)->max('sequence');

        $step = new RoadmapStep();
        $step->roadmap_id = $id;
        $step->title = $request->input('title');
        $step->description = $request->input('description');
        $step->sequence = $maxSequence + 1; // Set the sequence number
        $step->save();
        $message = 'Step Added Successfully';
        return Redirect::route('admin.roadmap.step.create', ['id'=>$id,'roadmap' => $roadmap])->with('message', $message);
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
    public function destroy(Request $request, $stepId, $roadmapId) : RedirectResponse
    {
        $roadmapStep = RoadmapStep::findOrFail($stepId);
        $roadmapStep->delete();
    
        $request->session()->push('success', 'Step deleted successfully.');
        
        return redirect()->route('admin.roadmap.steps', ['id' => $roadmapId])->with('message', 'Step Deleted Successfully');;
    }
    

    public function destroyAll($roadmapId)
    {
        RoadmapStep::where('roadmap_id', $roadmapId)->delete();
        return redirect()->back()->with('message', 'All roadmap steps  have been deleted.');
    }
}
