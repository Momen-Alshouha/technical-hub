<?php
$confirmDeleteModal = view('shared.confirm-delete-modal')->render();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TechnicalHUB - Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('admin_style/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin_style/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('admin_style/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('admin_style/css/style.css')}}" rel="stylesheet">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container-fluid position-relative bg-white d-flex p-0">
        {!! $confirmDeleteModal !!}
        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="{{route('dashboard')}}" class="navbar-brand mx-4 mb-3">
                    <h3 class="dashboard"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">

                    <div class="ms-3">
                        <h6 class="mb-2">Welcome {{Auth::user()->name}}</h6>
                        <a class="my-4" href="{{route('home')}}">Go To Website</a>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{route('dashboard')}}" class="nav-item nav-link my-1 {{Request::is('admin/dashboard') ? 'active' : ''}}"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="{{route('users')}}" class="nav-item nav-link my-1 {{Request::is('admin/users') ? 'active' : ''}}"><i class="fa fa-th me-2"></i>Users</a>
                    <a href="{{route('reviews.admin.index')}}" class="nav-item nav-link my-1 {{Request::is('admin/reviews') ? 'active' : ''}}"><i class="fa fa-comment me-2"></i>Reviews</a>

                    <div class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle my-1 {{Request::is('admin/interview_qustions_category/create') ||Request::is('admin/interview_qustions_category') ? 'active' : ''}}" data-bs-toggle="dropdown"><i class="fa fa-question-circle me-2"></i>Questions Categories</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{route('interview_qustions_category.index')}}" class="dropdown-item my-1 {{Request::is('admin/interview_qustions_category') ? 'active' : ''}}">Show Categories</a>
                            <a href="{{route('interview_qustions_category.create')}}" class="dropdown-item my-1 {{Request::is('admin/interview_qustions_category/create') ? 'active' : ''}}">Add Category</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle my-1 {{Request::is('admin/interview_qustions/create') ||Request::is('admin/interview_qustions') ? 'active' : ''}}" data-bs-toggle="dropdown"><i class="fa fa-question me-2"></i>Questions</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{route('interview_qustions.index')}}" class="dropdown-item my-1 {{Request::is('admin/interview_qustions') ? 'active' : ''}}">Show Questions</a>
                            <a href="{{route('interview_qustions.create')}}" class="dropdown-item my-1 {{Request::is('admin/interview_qustions/create') ? 'active' : ''}}">Add Interview Questions</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle {{Request::is('admin/courses') ||Request::is('admin/courses/create') ? 'active' : ''}}" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Courses</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{route('courses.index')}}" class="dropdown-item">Show Courses</a>
                            <a href="{{route('courses.create')}}" class="dropdown-item">Add Course</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle {{Request::is('admin/roadmaps/categories') ||Request::is('admin/roadmap/category/create') ? 'active' : ''}}" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Roadmaps Categories</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{route('roadmaps.categories.index')}}" class="dropdown-item {{Request::is('admin/roadmaps/categories') ? 'active' : ''}}">Show Categories</a>
                            <a href="{{route('roadmaps.category.create')}}" class="dropdown-item {{Request::is('admin/roadmap/category/create') ? 'active' : ''}}">Add Category</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle {{Request::is('admin/roadmaps') || Request::is('admin/roadmap/create') ? 'active' : '' }}" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Roadmaps</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{route('admin.roadmaps.index')}}" class="dropdown-item {{Request::is('admin/roadmaps') ? 'active' : ''}}">Show Roadmaps</a>
                            <a href="{{route('admin.roadmap.create')}}" class="dropdown-item {{Request::is('admin/roadmap/create') ? 'active' : ''}}">Add Roadmap</a>
                        </div>
                    </div>


                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>


                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <span class="d-none d-lg-inline-flex">{{Auth::user()->name}}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">

                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>


                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->




            @yield('content')



            <!-- JavaScript Libraries -->
            <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
            <script src="{{asset('admin_style/lib/chart/chart.min.js')}}"></script>
            <script src="{{asset('admin_style/lib/easing/easing.min.js')}}"></script>
            <script src="{{asset('admin_style/lib/waypoints/waypoints.min.js')}}"></script>
            <script src="{{asset('admin_style/lib/owlcarousel/owl.carousel.min.js')}}"></script>
            <script src="{{asset('admin_style/lib/tempusdominus/js/moment.min.js')}}"></script>
            <script src="{{asset('admin_style/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
            <script src="{{asset('admin_style/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

            <!-- Template Javascript -->
            <script src="{{asset('js/delete.js')}}"></script>

</body>

</html>