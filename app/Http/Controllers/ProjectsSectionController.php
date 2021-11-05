<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorageUpdateProjectsSection;
use App\Models\ProjectsSection;
use Illuminate\Http\Request;

class ProjectsSectionController extends Controller
{
    public function list(){

        if(!ProjectsSection::exists()){
            ProjectsSection::create(['title' => '', 'phrase' => '']);
        }

        $sections = ProjectsSection::all();
        return view('admin.projects_section.table', compact('sections'));
    }

    public function edit($id){

        if(!$section = ProjectsSection::find($id)){
            return redirect()->route('admin.projects-section')->with('message', 'id not found');
        }

        return view('admin.projects_section.update', compact('section'));

    }

    public function update(StorageUpdateProjectsSection $request, $id){

        if(!$section = ProjectsSection::find($id)){
            return redirect()->route('admin.projects-section')->with('message', 'id not found');
        }

        $section->update($request->all());
        return redirect()->route('admin.projects-section')->with('message', 'section was edited');
    }
}
