<?php

namespace App\Http\Controllers;

use App\Models\AreSection;
use App\Models\InitialSection;
use App\Models\Logo;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index(){

        $logos = Logo::all();
        $initialSections = InitialSection::all();
        $areSections = AreSection::all();

        return view('index', compact('logos', 'initialSections', 'areSections'));
    }
}
