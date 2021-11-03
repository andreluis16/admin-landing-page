<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorageUpdateAreSection;
use App\Models\AreSection;
use Illuminate\Http\Request;

class AreSectionController extends Controller
{
    public function list(){

        if(!AreSection::exists()){
            AreSection::create(['title' => '','phrase' => '']);
        }

        $sections = AreSection::all();

        return view('admin.are_section.table', compact('sections'));
    }

    public function edit($id){

        if(!$section = AreSection::find($id)){
            return redirect()->route('admin.index');
        }

        return view('admin.are_section.update', compact('section'));
    }

    public function update(StorageUpdateAreSection $request, $id){

        if(!$section = AreSection::find($id)){
            return redirect()->route('admin.index');
        }

        $section->update($request->all());
        return redirect()->route('admin.are-section')->with('message', 'Section has been updated');
    }
}
