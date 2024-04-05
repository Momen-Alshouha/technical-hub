<?php

namespace App\Http\Controllers;

use App\Models\RoadmapsCategory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class RoadmapsCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $roadmapsCategories = RoadmapsCategory::all();
        return view('admin.roadmaps_categories.roadmaps_categories', compact('roadmapsCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
        return view('admin.roadmaps_categories.add_category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): RedirectResponse
    {
        $category = new RoadmapsCategory();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            if ($file->isValid()) {
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('public/Image/roadmaps_categories'), $filename);
                $category->image = $filename;
            }
        }

        $category->name = $request->input('name');
        $category->description = $request->input('description');

        $category->save();

        return redirect()->route('roadmaps.categories.index')->with('success', 'Roadmaps Category Added Successfully');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RoadmapsCategory  $roadmapsCategory
     * @return \Illuminate\Http\Response
     */
    public function show(RoadmapsCategory $roadmapsCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RoadmapsCategory  $roadmapsCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id): View
    {
        $category = RoadmapsCategory::findOrFail($id);
        return view('admin.roadmaps_categories.edit_category', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RoadmapsCategory  $roadmapsCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id): RedirectResponse
    {

        $roadmapsCategory = RoadmapsCategory::findOrFail($id);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            if ($file->isValid()) {
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('public/Image/roadmaps_categories'), $filename);
                $roadmapsCategory->image = $filename;
            }
        }

        $roadmapsCategory->name = $request->input('name');
        $roadmapsCategory->description = $request->input('description');

        $roadmapsCategory->save();

        return redirect()->route('roadmaps.categories.index')->with('success', 'Roadmaps Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RoadmapsCategory  $roadmapsCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id): RedirectResponse
    {
        $category = RoadmapsCategory::find($id);
        $category->delete();
        return redirect()->route('roadmaps.categories.index')->with('message', 'Category deleted successfully');
    }
}
