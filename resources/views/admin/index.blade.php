@extends('admin.layout')

@section('content')
       <!-- Sale & Revenue Start -->
       <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-user fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Users</p>
                        <h6 class="mb-0">{{$totalUsers}}</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-graduation-cap fa-3x text-primary" aria-hidden="true"></i>
                    <div class="ms-3">
                        <p class="mb-2">Courses</p>
                        <h6 class="mb-0">{{$totalCourses}}</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-question-circle fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Interview Categories</p>
                        <h6 class="mb-0">{{$totalInterviewQuesCats}}</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-question fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Interview Questions</p>
                        <h6 class="mb-0">{{$totalInterviewQues}}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection