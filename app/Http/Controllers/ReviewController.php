<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() : View
    {
        $reviews = Review::all();
        return view('admin.reviews', \compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() : View
    {
        return view('add_review');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) : View
    {
        $review = Review::create($request->all());

        return view('add_review', ['success' => 'Thank you for your review!']);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review) : RedirectResponse
    {
        $review->delete();
        return redirect()->route('reviews.admin.index')->with('success', 'Review Deleted Succesfully');
    }
}
