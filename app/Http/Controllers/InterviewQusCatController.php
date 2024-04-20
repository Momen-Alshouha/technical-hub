<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Redirector;
use App\Models\Interview_Qus_Cat;
use App\Models\Interview_Qustions;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class InterviewQusCatController extends Controller
{

    public function getQustionsByCategory($id) {
        
        $qustionsByCategory = Interview_Qustions::where('cat_id',$id)->get();
        $categoryTitle = Interview_Qus_Cat::where('id', $id)->pluck('title')->first();
        $qustions = DB::table('interview__qustions')
        ->join('interview__qus__cats','interview__qustions.cat_id','=','interview__qus__cats.id')
        ->select('interview__qus__cats.*','interview__qustions.*')->where('cat_id',$id)->get();
        
        return view('qustions_by_category',compact(['qustionsByCategory','qustions','categoryTitle']));
    }

    public function showCategories() {
        $categories = Interview_Qus_Cat::all();
        return view('qustions', compact('categories'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() : View
    {
        $categories=Interview_Qus_Cat::all();
        return view('admin.interview_questions.show_categories',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() : View
    {
        return view('admin.interview_questions.add_interview_qus_cat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) : RedirectResponse
    {

        $data= new Interview_Qus_Cat();

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data->image= $filename;
        }

        $data->title= $request->input('title');
        $data->description= $request->input('description');;

        $data->save();

        return redirect()->route('interview_qustions_category.index')->with('success', 'Category Added Succesfully');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Interview_Qus_Cat  $interview_Qus_Cat
     * @return \Illuminate\Http\Response
     */
    public function edit($id) : View
    {
      
        $category = Interview_Qus_Cat::findOrFail($id);
        return view('admin.interview_questions.edit_interview_qus_cat', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Interview_Qus_Cat  $interview_Qus_Cat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) : RedirectResponse
    {
        $category = Interview_Qus_Cat::findOrFail($id);
    
        if ($request->hasFile('image')) {
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $category->image= $filename;
        }
    
        $category->title = $request->input('title');
        $category->description = $request->input('description');
    
        $category->save();
    
        return redirect()->route('interview_qustions_category.index')->with('success', 'Category Updated Successfully');
    }
    
    public function destroy($id)
    {

        $category = Interview_Qus_Cat::find($id);
        $category->delete();
        return redirect()->route('interview_qustions_category.index')->with('success', 'category deleted succesfully');
    }   
}
