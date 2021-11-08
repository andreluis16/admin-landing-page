<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorageUpdateVideoSection;
use App\Models\VideoSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class VideoSectionController extends Controller
{
    public function list(){

        if(!VideoSection::exists()){
            VideoSection::create(['image' => '', 'title' => '', 'phrase' => '']);
        }

        $sections = VideoSection::all();
        return view('admin.video_section.table', compact('sections'));
    }

    public function edit($id){

        if(!$section = VideoSection::find($id)){
            return redirect()->route('admin.video-section')->with('message', 'id not found');
        }
        return view('admin.video_section.update', compact('section'));

    }

    public function update(StorageUpdateVideoSection $request, $id){

        if(!$section = VideoSection::find($id)){
            return redirect()->route('admin.video-section')->with('message', 'id not found');
        }

        $data = $request->all();

        if($request->image && $request->image->isValid()){
            if(Storage::exists($section->image)){
                Storage::delete($section->image);
            }

            $fileName = Str::of($request->title)->slug('-').'.'.$request->image->getClientOriginalExtension();
            $filePath = $request->image->storeAs('videos', $fileName);
            $data['image'] = $filePath;

        }

        $section->update($data);
        return redirect()->route('admin.video-section')->with('message', 'section was updated');

    }
}
