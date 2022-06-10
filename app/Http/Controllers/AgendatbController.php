<?php

namespace App\Http\Controllers;

use App\Models\Agendatb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class AgendatbController extends Controller
{
    public function index()
    {
        $data = Agendatb::all();
        // dd($data);
        return view('dataagenda', compact('data'));
    }

    public function tambahagenda()
    {
        return view('tambahdataagenda');
    }

    public function insertdataagenda(Request $request)
    {
        //   dd($request->all());
        $data = Agendatb::create($request->all());
        if($request->hasFile('dokumen')){
            $request->file('dokumen')->move('dokumen/', $request->file('dokumen')->getClientOriginalName());
            $data->dokumen = $request->file('dokumen')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('agendatbs');
    }

    public function tampilkandataagenda($id)
    {
        $data = Agendatb::find($id);
        //   dd($data);
        return view('tampildataagenda', compact('data'));
    }

    public function updatedataagenda(Request $request, $id)
    {
        $data = Agendatb::find($id);
        if ($request->hasFile('dokumentasi')) {
            $destination = 'dokumentasifoto/' . $data->dokumentasi;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('dokumentasi');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('dokumentasifoto/', $filename);
            $data->dokumentasi = $filename;
        }
        $data->update();
        $data->update($request->all());
        return redirect()->route('agendatbs')->with('success', 'Data berhasil ditambahkan');
    }

    public function deletedataagenda($id)
    {
        $data = Agendatb::find($id);
        $data->delete();
        return redirect()->route('agendatbs')->with('success', 'Data berhasil dihapus');
    }
}
