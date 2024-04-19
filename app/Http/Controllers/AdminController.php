<?php

namespace App\Http\Controllers;

use App\Models\RoadmapsCategory;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Interview_Qus_Cat;
use App\Models\Interview_Qustions;
use App\Models\User;
use App\Models\Review;
use App\Models\Roadmap;
use Illuminate\Contracts\View\View;

class AdminController extends Controller
{
    /**
     * Create a new AdminController instance.
     *
     * This constructor applies the 'admin' middleware to all methods
     * in the controller, ensuring that only authenticated admin users
     * can access the routes handled by this controller.
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $totalUsers = User::count();
        $totalInterviewQues = Interview_Qustions::count();
        $totalInterviewQuesCats = Interview_Qus_Cat::count();
        $totalCourses = Course::count();
        $totalRoadmapsCategories = RoadmapsCategory::count();
        $totalRoadmaps = Roadmap::count();

        return view('admin.index', [
            'totalCourses' => $totalCourses,
            'totalInterviewQuesCats' => $totalInterviewQuesCats,
            'totalInterviewQues' => $totalInterviewQues,
            'totalUsers' => $totalUsers,
            'totalRoadmapsCategories'=>$totalRoadmapsCategories,
            'totalRoadmaps'=>$totalRoadmaps,
        ]);
    }

      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getReviews() : View
    {
        $reviews = Review::all();
        return view('admin.reviews', \compact('reviews'));
    }

}
