<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Interview_Qus_Cat;
use App\Models\Interview_Qustions;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        $totalInterviewQues = Interview_Qustions::count();
        $totalInterviewQuesCats = Interview_Qus_Cat::count();
        $totalCourses = Course::count();

        return view('admin.index', [
            'totalCourses' => $totalCourses,
            'totalInterviewQuesCats' => $totalInterviewQuesCats,
            'totalInterviewQues' => $totalInterviewQues,
            'totalUsers' => $totalUsers,
        ]);
    }
}
