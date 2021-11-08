<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorageUpdateNetworksSection;
use App\Models\NetworksSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NetworksSectionController extends Controller
{
    public function list(){

        if(!NetworksSection::exists()){
            NetworksSection::create(['image' => '', 'link' => '']);
        }
        $sections = NetworksSection::all();
        return view('admin.networks_section.table', compact('sections'));
    }

    public function createForm(){
        return view('admin.networks_section.create');
    }

    public function create(StorageUpdateNetworksSection $request){

        $data = $request->all();

        if($request->image->isValid()){

            $fileName = Str::of($request->image)->slug('-').'.'.$request->image->getClientOriginalExtension();
            $filePath = $request->image->storeAs('networks', $fileName);
            $data['image'] = $filePath;
        }

        NetworksSection::create($data);
        return redirect()->route('admin.networks-section')->with('message', 'network was created');
    }

    public function edit($id){

        if(!$section = NetworksSection::find($id)){
            return redirect()->route('admin.networks-section')->with('message', 'id not found');
        }
        return view('admin.networks_section.update', compact('section'));
    }

    public function update(StorageUpdateNetworksSection $request, $id){
        if(!$section = NetworksSection::find($id)){
            return redirect()->route('admin.networks-section')->with('message', 'id not found');
        }

        $data = $request->all();

        if($request->image->isValid()){
            if(Storage::exists($section->image)){
                Storage::delete($section->image);
            }
            $fileName = Str::of($request->image)->slug('-').'.'.$request->image->getClientOriginalExtension();
            $filePath = $request->image->storeAs('networks', $fileName);
            $data['image'] = $filePath;
        }
        $section->update($data);
        return redirect()->route('admin.networks-section')->with('message', 'network was updated');


    }

    public function delete($id){
        if(!$section = NetworksSection::find($id)){
            return redirect()->route('admin.networks-section')->with('message', 'id not found');
        }

        $section->delete();
        return redirect()->route('admin.networks-section')->with('message', 'network was deleted');

    }
}
