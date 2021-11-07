<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorageUpdateSkillCardSection;
use App\Models\SkillCardSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SkillCardSectionController extends Controller
{
    public function list(){

        if(!SkillCardSection::exists()){
            SkillCardSection::create(['image' => '', 'title' => '', 'content' => '']);
        }

        $sections = SkillCardSection::all();

        return view('admin.skill_card_section.table', compact('sections'));

    }

    public function createForm(){
        return view('admin.skill_card_section.create');
    }

    public function create(StorageUpdateSkillCardSection $request){

        $data = $request->all();

        if($request->image->isValid()){

            $fileName = Str::of($request->title)->slug('-').'.'.$request->image->getClientOriginalExtension();
            $filePath = $request->image->storeAs('skill_card', $fileName);
            $data['image'] = $filePath;
        }

        SkillCardSection::create($data);
        return redirect()->route('admin.skill-card-section')->with('message', 'card was added');

    }

    public function edit($id){

        if(!$section = SkillCardSection::find($id)){
            return redirect()->route('admin.skill-card-section')->with('message', 'id not found');
        }

        return view('admin.skill_card_section.update', compact('section'));

    }

    public function update(StorageUpdateSkillCardSection $request, $id){

        if(!$section = SkillCardSection::find($id)){
            return redirect()->route('admin.skill-card-section')->with('message', 'id not found');
        }
        $data = $request->all();

        if($request->image && $request->image->isValid()){


            if(Storage::exists($section->image)){
                Storage::delete($request->image);
            }
            $fileName = Str::of($request->title)->slug('-').'.'.$request->image->getClientOriginalExtension();
            $filePath = $request->image->storeAs('skill_card', $fileName);
            $data['image'] = $filePath;
        }

        $section->update($data);
        return redirect()->route('admin.skill-card-section')->with('message', 'card was edited');

    }

    public function delete($id){
        if(!$section = SkillCardSection::find($id)){
            return redirect()->route('admin.skill-card-section')->with('message', 'id not found');
        }

        $section->delete();
        return redirect()->route('admin.skill-card-section')->with('message', 'card was deleted');
    }
}
