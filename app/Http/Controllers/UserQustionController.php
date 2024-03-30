<?php

namespace App\Http\Controllers;

use App\Models\UserQustion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserQustionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $qustions = DB::table('interview__qustions')
        // ->join('interview__qus__cats','interview__qustions.cat_id','=','interview__qus__cats.id')
        // ->select('interview__qus__cats.*','interview__qustions.*')->get();

        $qustions = DB::table('user_qustions')
        ->join('user_answers','user_qustions.id','=','user_answers.qustion_id')
        ->select('user_qustions.*','user_answers.*')->get();

        return $qustions;

        // $qustions = UserQustion::all();
        // return \view('ask',\compact('qustions'));
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
     * @param  \App\Models\UserQustion  $userQustion
     * @return \Illuminate\Http\Response
     */
    public function show(UserQustion $userQustion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserQustion  $userQustion
     * @return \Illuminate\Http\Response
     */
    public function edit(UserQustion $userQustion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserQustion  $userQustion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserQustion $userQustion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserQustion  $userQustion
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserQustion $userQustion)
    {
        //
    }
}
