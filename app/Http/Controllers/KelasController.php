<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        $data = kelas::all();
        // dd($data);
        return view('datakelas', compact('data'));
    }

    public function tambahkelas()
    {
        return view('tambahdatakelas');
    }

    public function insertdatakelas(Request $request)
    {
        //   dd($request);p
        kelas::create($request->all());
        return redirect()->route('kelas');
    }

    public function tampilkandatakelas($id)
    {
        $data = kelas::find($id);
        //   dd($data);
        return view('tampildatakelas', compact('data'));
    }

    public function updatedatakelas(Request $request, $id)
    {
        $data = kelas::find($id);
        $data->update($request->all());
        return redirect()->route('kelas')->with('success', 'Data berhasil ditambahkan');
    }

    public function deletedatakelas($id)
    {
        $data = kelas::find($id);
        $data->delete();
        return redirect()->route('kelas')->with('success', 'Data berhasil dihapus');
    }
}
