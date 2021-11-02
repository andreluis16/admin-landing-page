<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorageUpdateInitialSection;
use App\Models\InitialSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class InitialSectionController extends Controller
{
    public function list(){

        if (!InitialSection::exists()) {
            InitialSection::create(['title' => '', 'image' => '', 'content' => '']);
        }

        $sections = InitialSection::all();

        return view('admin.initial_section.table', compact('sections'));

    }

    public function edit($id){

        if(!$section = initialSection::find($id)){
            return redirect()->route('admin.index');
        }

        return view('admin.initial_section.form', compact('section'));

    }

    public function update(StorageUpdateInitialSection $request, $id){

        if(!$section = InitialSection::find($id)){
            return redirect()->route('admin.index');
        }

        $data = $request->all();

        if($request->image && $request->image->isvalid()){
            if(Storage::exists($section->image)){
                Storage::delete($section->image);
            }

            $fileName = Str::of($request->title)->slug('-').'.'.$request->image->getClientOriginalExtension();
            $imagePath = $request->image->storeAs('initial-section', $fileName);
            $data['image'] = $imagePath;
        }

        $section->update($data);
        return redirect()->route('admin.initial-section')->with('message', 'Successfully edited section');

    }
}
