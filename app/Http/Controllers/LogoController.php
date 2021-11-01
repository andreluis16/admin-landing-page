<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorageUpdateLogo;
use App\Models\Logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class LogoController extends Controller
{
    public function list()
    {
        if (!Logo::exists()) {
            Logo::create(['logo' => '']);
        }

        $logos = Logo::all();
        return view('admin.logo.logo', compact('logos'));
    }

    public function edit($id)
    {
        if (!$logo = Logo::find($id)) {
            return redirect()->route('admin.index');
        }
        return view('admin.logo.form', compact('logo'));
    }

    public function update(StorageUpdateLogo $request, $id)
    {

        if (!$logo = Logo::find($id)) {
            return redirect()->route('admin.index');
        }

        $data = $request->all();

        if ($request->logo && $request->logo->isValid()) {
            if (Storage::exists($logo->logo)) {
                Storage::delete($logo->logo);
            }
            $nameFile = Str::of('logo-image') . '.' . $request->logo->getClientOriginalExtension();
            $logoPath = $request->logo->storeAs('logo', $nameFile);
            $data['logo'] = $logoPath;
        }

        $logo->update($data);
        return redirect()->route('admin.logo')->with('message', 'Logo alterada com sucesso');
    }
}
