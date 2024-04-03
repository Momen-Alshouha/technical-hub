<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

/**
 * Class SiteController
 * @package App\Http\Controllers
 */
class SiteController extends Controller
{

        /**
     * Display the about page.
     *
     * @return View
     */
    public function showHomePage() : View {
        return view('home');
    }

    /**
     * Display the about page.
     *
     * @return View
     */
    public function showAboutPage() : View {
        return view('about');
    }

    /**
     * Display the contact page.
     *
     * @return View
     */
    public function showContactPage() : View {
        return view('contact');
    }
}
