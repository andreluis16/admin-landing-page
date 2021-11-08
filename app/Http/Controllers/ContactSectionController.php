<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorageUpdateContactSection;
use App\Models\ContactSection;
use Illuminate\Http\Request;

class ContactSectionController extends Controller
{
    public function list(){

        if(!ContactSection::exists()){
            ContactSection::create(['address' => '', 'telephone' => '', 'email' => '', 'link' => '']);
        }

        $sections = ContactSection::all();
        return view('admin.contact_section.table', compact('sections'));

    }

    public function edit($id){

        if(!$section = ContactSection::find($id)){
            return redirect()->route('admin.contact-section')->with('message', 'id not found');
        }
        return view('admin.contact_section.update', compact('section'));

    }

    public function update(StorageUpdateContactSection $request, $id){

        if(!$section = ContactSection::find($id)){
            return redirect()->route('admin.contact-section')->with('message', 'id not found');
        }

        $section->update($request->all());
        return redirect()->route('admin.contact-section')->with('message', 'contact was updated');

    }
}
