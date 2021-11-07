<?php

namespace App\Http\Controllers;

use App\Models\AreSection;
use App\Models\CardSection;
use App\Models\DrummerSection;
use App\Models\InitialSection;
use App\Models\Logo;
use App\Models\ProjectsSection;
use App\Models\SkillCardSection;
use App\Models\SlideSection;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index(){

        $logos = Logo::all();
        $initialSections = InitialSection::all();
        $areSections = AreSection::all();
        $cardSections = CardSection::all();
        $projectsSections = ProjectsSection::all();
        $slideSections = SlideSection::all();
        $drummerSections = DrummerSection::all();
        $skillCardSections = SkillCardSection::all();

        return view('index', compact('logos', 'initialSections',
                                     'areSections', 'cardSections',
                                     'projectsSections', 'slideSections',
                                      'drummerSections', 'skillCardSections'));
    }
}
