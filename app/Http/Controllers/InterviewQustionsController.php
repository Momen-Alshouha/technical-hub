<?php

namespace App\Http\Controllers;

use App\Models\Interview_Qustions;
use App\Models\Interview_Qus_Cat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InterviewQustionsController extends Controller
{

    public function index()
    {
        // $qustions = Interview_Qustions::all();
        
        $qustions = DB::table('interview__qustions')
        ->join('interview__qus__cats','interview__qustions.cat_id','=','interview__qus__cats.id')
        ->select('interview__qus__cats.*','interview__qustions.*')->get();
        
        // dd($qustions);
        
        return view('admin.show_interview_qustions',compact('qustions'));
    }

   
    public function create()
    {
        $categories = Interview_Qus_Cat::all();
        return view('admin.add_interview_qustions', compact('categories'));
    }

 
    public function store(Request $request)
    {
        $qustion = Interview_Qustions::create($request->all());

        $qustions = DB::table('interview__qustions')
        ->join('interview__qus__cats','interview__qustions.cat_id','=','interview__qus__cats.id')
        ->select('interview__qus__cats.*','interview__qustions.*')->get();


        return redirect()->route('interview_qustions.index')->with('success', 'Qustion Added succesfully');

    }

    public function destroy($id)
    {
        $qustions = Interview_Qustions::find($id);
        $qustions->delete();
        return redirect()->route('interview_qustions.index')->with('success', 'Qustion Deleted Succesfully');
    }
}
