<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorageUpdateCardSection;
use App\Models\CardSection;
use Illuminate\Http\Request;

class CardSectionController extends Controller
{
    public function list(){

        if(!CardSection::exists()){
            CardSection::create(['icon' => '', 'title' => '', 'content' => '']);
        }

        $sections = CardSection::all();

        return view('admin.card_section.table', compact('sections') );

    }

    public function createForm(){
        return view('admin.card_section.create');
    }

    public function create(StorageUpdateCardSection $request){

        CardSection::create($request->all());

        return redirect()->route('admin.card-section')->with('message', 'card was added');

    }

    public function edit($id){

        if(!$section = CardSection::find($id)){
            return redirect()->route('admin.card-section')->with('message', 'id not found');
        }

        return view('admin.card_section.update', compact('section'));
    }

    public function update(StorageUpdateCardSection $request, $id){

        if(!$section = CardSection::find($id)){
            return redirect()->route('admin.card-section')->with('message', 'id not found');
        }

        $section->update($request->all());
        return redirect()->route('admin.card-section')->with('message', 'card was edited');

    }

    public function delete($id){

        if(!$section = CardSection::find($id)){
            return redirect()->route('admin.card-section')->with('message', 'id not found');
        }

        $section->delete();
        return redirect()->route('admin.card-section')->with('message', 'card was deleted');

    }
}
