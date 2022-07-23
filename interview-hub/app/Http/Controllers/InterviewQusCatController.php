<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Redirector;
use App\Models\Interview_Qus_Cat;
use Illuminate\Http\Request;

class InterviewQusCatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Interview_Qus_Cat::all();
        return view('admin.show_categories',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.add_interview_qus_cat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Add Validation 
        
        $data= new Interview_Qus_Cat();

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data['image']= $filename;
        }

        $data['title']= $request->input('title');
        $data['description']= $request->input('description');;

        $data->save();

        $categories=Interview_Qus_Cat::all();

        $message = 'Category Added Successfully!';
        return redirect()->route('interview_qustions_category.index')->with('success', 'Category Added Succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Interview_Qus_Cat  $interview_Qus_Cat
     * @return \Illuminate\Http\Response
     */
    public function show(Interview_Qus_Cat $interview_Qus_Cat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Interview_Qus_Cat  $interview_Qus_Cat
     * @return \Illuminate\Http\Response
     */
    public function edit(Interview_Qus_Cat $interview_Qus_Cat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Interview_Qus_Cat  $interview_Qus_Cat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Interview_Qus_Cat $interview_Qus_Cat)
    {
        //
    }

    public function destroy($id)
    {

        $category = Interview_Qus_Cat::find($id);
        $category->delete();
        return redirect()->route('interview_qustions_category.index')->with('success', 'category deleted succesfully');
    }
    
   
}
