<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use App\Models\Course;
use Illuminate\Support\Facades\DB;

/**
 * Class SiteController
 * @package App\Http\Controllers
 */
class SiteController extends Controller
{

    /**
     * Display the home page.
     *
     * @return View
     */
    public function showHomePage(): View
    {
        $courses = Course::all();

        $reviews = DB::table('reviews')
       ->join('users','users.id','=','reviews.user_id')
       ->select('reviews.*','users.*')->get();

        return view('home', compact('courses','reviews'));
    }

    /**
     * Display the about page.
     *
     * @return View
     */
    public function showAboutPage(): View
    {
        return view('about');
    }

    /**
     * Display the contact page.
     *
     * @return View
     */
    public function showContactPage(): View
    {
        return view('contact');
    }
}
