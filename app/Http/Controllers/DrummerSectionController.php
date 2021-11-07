<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorageUpdateDrummerSection;
use App\Models\DrummerSection;
use Illuminate\Http\Request;

class DrummerSectionController extends Controller
{
    public function list(){

        if(!DrummerSection::exists()){
            DrummerSection::create(['title' => '', 'phrase' => '']);
        }

        $sections = DrummerSection::all();

        return view('admin.drummer_section.table', compact('sections'));

    }

    public function edit($id){

        if(!$section = DrummerSection::find($id)){
            return redirect()->route('admin.drummer-section')->with('message', 'id not found');
        }

        return view('admin.drummer_section.update', compact('section'));

    }

    public function update(StorageUpdateDrummerSection $request, $id){

        if(!$section = DrummerSection::find($id)){
            return redirect()->route('admin.drummer-section')->with('message', 'id not found');
        }

        $section->update($request->all());

        return redirect()->route('admin.drummer-section')->with('message', 'section was updated');
    }
}
