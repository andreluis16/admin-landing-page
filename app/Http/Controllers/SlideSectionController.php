<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorageUpdateSlideSection;
use App\Models\SlideSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SlideSectionController extends Controller
{
    public function list(){

        if(!SlideSection::exists()){
            SlideSection::create(['image' => '', 'title' => '', 'content' => '']);
        }

        $sections = SlideSection::all();
        return view('admin.slide_section.table', compact('sections'));
    }

    public function createForm(){
        return view('admin.slide_section.create');
    }

    public function create(StorageUpdateSlideSection $request){

        $data = $request->all();

        if($request->image->isValid()){

            $fileName = Str::of($request->title)->slug('-').'.'.$request->image->getClientOriginalExtension();
            $filePath = $request->image->storeAs('slides', $fileName);
            $data['image'] = $filePath;

        }

        SlideSection::create($data);
        return redirect()->route('admin.slide-section')->with('message', 'Slide was added');
    }

    public function edit($id){

        if(!$section = SlideSection::find($id)){
            return redirect()->route('admin.slide-section')->with('message', 'Id not found');
        }

        return view('admin.slide_section.update', compact('section'));

    }

    public function update(StorageUpdateSlideSection $request, $id){

        if(!$section = SlideSection::find($id)){
            return redirect()->route('admin.slide-section')->with('message', 'Id not found');
        }

        $data = $request->all();

        if($request->image && $request->image->isValid()){
            if(Storage::exists($section->image)){
                Storage::delete($section->image);
            }

            $fileName = Str::of($request->title)->slug('-').'.'.$request->image->getClientOriginalExtension();
            $filePath = $request->image->storeAs('slides', $fileName);
            $data['image'] = $filePath;
        }

        $section->update($data);
        return redirect()->route('admin.slide-section')->with('message', 'Slide was updated');
    }

    public function delete($id){

        if(!$section = SlideSection::find($id)){
            return redirect()->route('admin.slide-section')->with('message', 'Id not found');
        }

        $section->delete();
        return redirect()->route('admin.slide-section')->with('message', 'slide was deleted');
    }

}
