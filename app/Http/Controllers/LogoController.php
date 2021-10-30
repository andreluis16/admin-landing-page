<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use Illuminate\Http\Request;

class LogoController extends Controller
{
    public function list(){


            Logo::firstOrCreate(['logo' => '']);


        $logos = Logo::all();

        return view('admin.logo.logo', compact('logos'));
    }
}
