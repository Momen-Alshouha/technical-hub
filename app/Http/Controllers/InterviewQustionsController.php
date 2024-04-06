<?php

namespace App\Http\Controllers;

use App\Models\Interview_Qustions;
use App\Models\Interview_Qus_Cat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class InterviewQustionsController extends Controller
{

    /**
     * Display a listing of the interview questions.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Retrieve all interview questions with their associated categories
        $qustions = DB::table('interview__qustions')
            ->join('interview__qus__cats', 'interview__qustions.cat_id', '=', 'interview__qus__cats.id')
            ->select('interview__qus__cats.*', 'interview__qustions.*')->get();

        return view('admin.interview_questions.show_interview_qustions', compact('qustions'));
    }


    /**
     * Show the form for creating a new interview question.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $categories = Interview_Qus_Cat::all();
        return view('admin.interview_questions.add_interview_qustions', compact('categories'));
    }


    /**
     * Store a newly created interview question in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'cat_id' => 'required',
            'qustion' => 'required',
            'answer' => 'required',
        ]);

        $question = new Interview_Qustions();
        $question->cat_id = $validatedData['cat_id'];
        $question->qustion = $validatedData['qustion'];
        $question->answer = $validatedData['answer'];
        $question->created_at = Carbon::now()->subDays(rand(0, 30));
        $question->updated_at = Carbon::now()->subDays(rand(0, 30));
        $question->save();

        return redirect()->route('interview_qustions.index')->with('success', 'Question added successfully');
    }

    /**
     * Remove the specified interview question from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $question = Interview_Qustions::find($id);
        $question->delete();

        return redirect()->route('interview_qustions.index')->with('success', 'Question deleted successfully');
    }

    /**
     * Show the form for editing the specified interview question.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $question = Interview_Qustions::find($id);
        $categories = Interview_Qus_Cat::all();

        return view('admin.interview_questions.edit_interview_question', compact('question', 'categories'));
    }

    /**
     * Update the specified interview question in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'cat_id' => 'required',
            'qustion' => 'required',
            'answer' => 'required',
        ]);

        $question = Interview_Qustions::findOrFail($id);
        $question->cat_id = $validatedData['cat_id'];
        $question->qustion = $validatedData['qustion'];
        $question->answer = $validatedData['answer'];
        $question->save();

        return redirect()->route('interview_qustions.index')->with('success', 'Question updated successfully');
    }
}
