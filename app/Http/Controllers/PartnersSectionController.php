<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorageUpdatePatinersSection;
use App\Models\PartnersSection;
use Illuminate\Http\Request;

class PartnersSectionController extends Controller
{
    public function list(){

        if(!PartnersSection::exists()){
            PartnersSection::create(['title' => '', 'phrase' => '']);
        }
        $sections = PartnersSection::all();
        return view('admin.partiners_section.table', compact('sections'));
    }

    public function edit($id){

        if(!$section = PartnersSection::find($id)){
            return redirect()->route('admin.partiners-section')->with('message', 'id not found');
        }

        return view('admin.partiners_section.update', compact('section'));

    }

    public function update(StorageUpdatePatinersSection $request, $id){
        if(!$section = PartnersSection::find($id)){
            return redirect()->route('admin.partiners-section')->with('message', 'id not found');
        }

        $section->update($request->all());
        return redirect()->route('admin.partiners-section')->with('message', 'section was updated');
    }
}
