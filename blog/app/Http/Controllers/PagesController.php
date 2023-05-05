<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Http\Controllers\NewsController;

class PagesController extends Controller
{
    public function index()
    {
        $news = News::orderBy('created_at', 'desc')->get();

        return view('pages.home', compact('news'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function login()
    {
        return view('pages.login');
    }

    public function register()
    {
        return view('pages.register');
    }

    public function courses()
    {
        return view('pages.courses');
    }

    public function study()
    {
        return view('pages.study');
    }

    public function dashboard()
    {
        return view('pages.dashboard');
    }

    public function add_course()
    {
        return view('pages.add-course');
    }

    public function view_users()
    {
        return view('pages.view-users');
    }

}
