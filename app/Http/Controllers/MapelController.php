<?php

namespace App\Http\Controllers;

use App\Models\mapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function index()
    {
        $data = mapel::all();
        // dd($data);
        return view('datamapel', compact('data'));
    }

    public function tambahmapel()
    {
        return view('tambahdatamapel');
    }

    public function insertdatamapel(Request $request)
    {
        //   dd($request);p
        mapel::create($request->all());
        return redirect()->route('mapel');
    }

    public function tampilkandatamapel($id)
    {
        $data = mapel::find($id);
        //   dd($data);
        return view('tampildatamapel', compact('data'));
    }

    public function updatedatamapel(Request $request, $id)
    {
        $data = mapel::find($id);
        $data->update($request->all());
        return redirect()->route('mapel')->with('success', 'Data berhasil ditambahkan');
    }

    public function deletedatamapel($id)
    {
        $data = mapel::find($id);
        $data->delete();
        return redirect()->route('mapel')->with('success', 'Data berhasil dihapus');
    }
}
