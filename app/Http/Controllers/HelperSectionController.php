<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorageUpdateHelperSection;
use App\Models\HelperSection;
use Illuminate\Http\Request;

class HelperSectionController extends Controller
{
    public function list(){

        if(!HelperSection::exists()){
            HelperSection::create(['icon' => '', 'helper' => '']);
        }

        $sections = HelperSection::all();
        return view('admin.helper_section.table', compact('sections'));

    }

    public function createForm(){
        return view('admin.helper_section.create');
    }

    public function create(StorageUpdateHelperSection $request){

        HelperSection::create($request->all());
        return redirect()->route('admin.helper-section')->with('message', 'helper was added');

    }

    public function edit($id){

        if(!$section = HelperSection::find($id)){
            return redirect()->route('admin.helper-section')->with('message', 'id not found');
        }
        return view('admin.helper_section.update', compact('section'));
    }

    public function update(StorageUpdateHelperSection $request, $id){

        if(!$section = HelperSection::find($id)){
            return redirect()->route('admin.helper-section')->with('message', 'id not found');
        }

        $section->update($request->all());
        return redirect()->route('admin.helper-section')->with('message', 'helper was updated');
    }

    public function delete($id){

        if(!$section = HelperSection::find($id)){
            return redirect()->route('admin.helper-section')->with('message', 'id not found');
        }
        $section->delete();
        return redirect()->route('admin.helper-section')->with('message', 'helper was deleted');

    }
}
