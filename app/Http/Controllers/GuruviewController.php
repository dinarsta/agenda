<?php

namespace App\Http\Controllers;

use App\Models\Agendatb;
use Illuminate\Http\Request;

class GuruviewController extends Controller
{
    public function guruview(){
        $data = Agendatb::all();
        return view('guruview', compact('data'));
    }
    public function tambahguruview()
    {
        return view('guruview');
    }

    public function insertdataguruview (Request $request)
    {
        //   dd($request->all());
        $data = Agendatb::create($request->all());
        if ($request->hasFile('dokumen')) {
            $request->file('dokumen')->move('dokumen/', $request->file('dokumen')->getClientOriginalName());
            $data->dokumen = $request->file('dokumen')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('guruview')->with('success', 'Data berhasil ditambahkan');
    }

    public function tampilkandataguruview ($id)
    {
        $data = Agendatb::find($id);
        //   dd($data);
        return view('guruview', compact('data'));
    }

    public function updatedataguruview (Request $request, $id)
    {
        $data = Agendatb::find($id);
        if ($request->hasFile('dokumen')) {
            $destination = 'dokumen/' . $data->dokumen;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('dokumen');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('dokumen/', $filename);
            $data->dokumentasi = $filename;
        }
        $data->update();
        $data->update($request->all());
        return redirect()->route('guruview')->with('success', 'Data berhasil ditambahkan');
    }

    public function deletedataguruview ($id)
    {
        $data = Agendatb::find($id);
        $data->delete();
        return redirect()->route('guruview')->with('success', 'Data berhasil dihapus');
    }
}
