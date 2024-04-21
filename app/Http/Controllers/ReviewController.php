<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() : View
    {
        $reviews = Review::with('user');
        return view('admin.reviews', \compact('reviews'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) : View
    {
        $review = Review::create([
            'user_id' => Auth::id(),
            'description' => $request->input('description'),
        ]);

        return view('add_review', ['success' => 'Thank you for your review!']);
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
