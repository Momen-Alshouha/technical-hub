<?php

namespace App\Http\Controllers;

use App\Models\Roadmap;
use App\Models\RoadmapsCategory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\ViewErrorBag;

class RoadmapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $roadmaps = Roadmap::getRoadmapsWithCategories();
        return view('admin.roadmaps.roadmaps', compact('roadmaps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() : View
    {
        $categories = RoadmapsCategory::all();
        return view('admin.roadmaps.add',compact('categories'));
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

        echo 'store';
        die;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Roadmap  $roadmap
     * @return \Illuminate\Http\Response
     */
    public function show(Roadmap $roadmap)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Roadmap  $roadmap
     * @return \Illuminate\Http\Response
     */
    public function edit($id) : View
    {
        $categories = RoadmapsCategory::all();
        $roadmap = Roadmap::findOrFail($id);
        return view('admin.roadmaps.update',compact(['roadmap','categories']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Roadmap  $roadmap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Roadmap $roadmap)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Roadmap  $roadmap
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) : RedirectResponse
    {
        $roadmap = Roadmap::findOrFail($id);
        $roadmap->delete();
        return redirect()->route('admin.roadmaps.index')->with('message','Roadmap Deleted Successfully!');
    }
}
