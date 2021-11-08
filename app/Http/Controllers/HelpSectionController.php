<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorageUpdateHelpSection;
use App\Models\HelpSection;
use Illuminate\Http\Request;

class HelpSectionController extends Controller
{
    public function list(){

        if(!HelpSection::exists()){
            HelpSection::create(['title' => '', 'phrase' => '', 'help_title' => '', 'help_info' => '']);
        }

        $sections = HelpSection::all();
        return view('admin.help_section.table', compact('sections'));

    }

    public function edit($id){

        if(!$section = HelpSection::find($id)){
            return redirect()->route('admin.help-section')->with('message', 'id not found');
        }
        return view('admin.help_section.update', compact('section'));

    }

    public function update(StorageUpdateHelpSection $request, $id){

        if(!$section = HelpSection::find($id)){
            return redirect()->route('admin.help-section')->with('message', 'id not found');
        }

        $section->update($request->all());
        return redirect()->route('admin.help-section')->with('message', 'section was updated');

    }
}
