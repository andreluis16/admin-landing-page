<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorageUpdateContributorsSection;
use App\Models\ContributorsSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ContributorsSectionController extends Controller
{
    public function list(){

        if(!ContributorsSection::exists()){
            ContributorsSection::create(['image' => '', 'name' => '']);
        }
        $sections = ContributorsSection::all();

        return view('admin.contributors_section.table', compact('sections'));
    }

    public function createForm(){
        return view('admin.contributors_section.create');
    }

    public function create(StorageUpdateContributorsSection $request){

        $data = $request->all();

        if($request->image->isValid()){
            $fileName = Str::of($request->name)->slug('-').'.'.$request->image->getClientOriginalExtension();
            $filePath = $request->image->storeAs('contributors', $fileName);
            $data['image'] = $filePath;
        }

        ContributorsSection::create($data);
        return redirect()->route('admin.contributors-section')->with('message', 'contributor was added');
    }

    public function edit($id){

        if(!$section = ContributorsSection::find($id)){
            return redirect()->route('admin.contributors-section')->with('message', 'id not found');
        }
        return view('admin.contributors_section.update', compact('section'));
    }

    public function update(StorageUpdateContributorsSection $request, $id){

            if(!$section = ContributorsSection::find($id)){
                return redirect()->route('admin.contributors-section')->with('message', 'id not found');
            }

            $data = $request->all();

            if($request->image && $request->image->isValid()){
                if(Storage::exists($section->image)){
                    Storage::delete($section->image);
                }

                $fileName = Str::of($request->name)->slug('-').'.'.$request->image->getClientOriginalExtension();
                $filePath = $request->image->storeAs('contributors', $fileName);
                $data['image'] = $filePath;
            }

            $section->update($data);
            return redirect()->route('admin.contributors-section')->with('message', 'contributor was updated');
    }
}
