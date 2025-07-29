<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Information;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $company = Information::get()->first();
        return view('frontend.pages.index', compact('company'));
    }
}
