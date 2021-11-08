<?php

namespace App\Http\Controllers;

use App\Models\AreSection;
use App\Models\CardSection;
use App\Models\ContributorsSection;
use App\Models\DrummerSection;
use App\Models\HelperSection;
use App\Models\HelpSection;
use App\Models\InitialSection;
use App\Models\Logo;
use App\Models\PartnersSection;
use App\Models\ProjectsSection;
use App\Models\SkillCardSection;
use App\Models\SlideSection;
use App\Models\VideoSection;
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
        $videoSections = VideoSection::all();
        $helpSections = HelpSection::all();
        $helperSections = HelperSection::all();
        $partinersSections = PartnersSection::all();
        $contributorsSections = ContributorsSection::all();

        return view('index', compact('logos', 'initialSections',
                                     'areSections', 'cardSections',
                                     'projectsSections', 'slideSections',
                                     'drummerSections', 'skillCardSections',
                                     'videoSections', 'helpSections',
                                     'helperSections', 'partinersSections',
                                     'contributorsSections'));
    }
}
