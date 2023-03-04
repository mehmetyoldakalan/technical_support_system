<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        return view('web.index');
    }
    public function about()
    {
        return view('web.about');
    }
    public function faq()
    {
        return view('web.faq');
    }
    public function contact()
    {
        return view('web.contact');
    }
}
