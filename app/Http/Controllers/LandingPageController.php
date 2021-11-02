<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index(){

        $logos = Logo::all();

        return view('index', compact('logos'));
    }
}
