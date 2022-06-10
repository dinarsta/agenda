<?php

namespace App\Http\Controllers;

use App\Models\guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
  public function home()
  {
    return view('layout.main');
  }

  public function index()
  {
    $data = guru::all();
    // dd($data);
    return view('dataguru', compact('data'));
    // return view('layout.main')
  }


  public function tambahguru()
  {
    return view('tambahdataguru');
  }

  public function insertdataguru(Request $request)
  {
    //   dd($request->all());
    guru::create($request->all());
    return redirect()->route('guru');
  }
  
  public function tampilkandataguru($id)
  {
    $data = guru::find($id);
    //   dd($data);
    return view('tampildataguru', compact('data'));
  }

  public function updatedataguru(Request $request, $id)
  {
    $data = guru::find($id);
    $data->update($request->all());
    return redirect()->route('guru')->with('success', 'Data berhasil ditambahkan');
  }

  public function deletedataguru($id)
  {
    $data = guru::find($id);
    $data->delete();
    return redirect()->route('guru')->with('success', 'Data berhasil dihapus');
  }
}
  

