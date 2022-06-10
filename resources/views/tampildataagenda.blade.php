@extends('layout.main')
@section('content')
<div class="col-8 grid-margin stretch-card" style="margin: auto" ;>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title" style="text-align: center">FORM TAMBAH DATA</h4>
            <p class="card-description"> Edit Data Agenda </p>
            <form action="/insertdataagenda/" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 text-light">
                    <label for="exampleInputEmail1" class="form-label" style="color: white;">Nama Guru</label>
                    <input type="text" name="nmguru" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp"value="{{$data->nmguru}}" style="color: white;">
                </div>
                <div class="mb-3 text-light">
                    <label for="exampleInputEmail1" class="form-label" style="color: white;">Materi</label>
                    <input type="text" name="materi" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp"value="{{$data->materi}}"style="color: white;">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label  text-light">Mata Pelajaran</label>
                    <select class="form-select" name="mapel" aria-label="Default select example">
                        
                        <option value="Pemrograman Dasar">Pemrograman Dasar</option>
                        <option value="Pemodelan Perangkat Lunak">Pemodelan Perangkat Lunak</option>
                        <option value="Pemrograman Berorientasi Objek">Pemrograman Berorientasi Objek</option>
                        <option value="Dasar Desain grafis">Dasar Desain grafis</option>
                        <option value="Basis Data">Basis Data</option>

                    </select>
                    <div class="mb-3 text-light">
                    <label for="exampleInputEmail1" class="form-label" style="color: white;">Jam Pelajaran</label>
                    <input type="text" name="jampel" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp"value="{{$data->jampel}}" style="color: white;">
                </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Pilih Kelas</label>
                        <select class="form-select" name="nmkelas" aria-label="Default select example"
                            style="background:#2A3038; color:white ">
                            <option value="X RPL 1">X RPL 1</option>
                            <option value="X RPL 2">X RPL 2</option>
                            <option value="XI RPL 1">XI RPL 1</option>
                            <option value="XI RPL 2">XI RPL 2</option>
                            <option value="XII RPL 1">XII RPL 1</option>
                            <option value="XII RPL 2">XII RPL 2</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 text-light">
                    <label for="exampleInputEmail1" class="form-label" style="color: white;">Tidak Hadir</label>
                    <input type="text" name="tdkhadir" class="form-control" value="{{$data->tdkhadir}}"id="exampleInputEmail1"
                        aria-describedby="emailHelp"value="{{$data->tdkhadir}}" style="color: white;">
                </div>
                
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label  text-light">Jenis Pembelajaran</label>
                    <select class="form-select" name="jenispel"  aria-label="Default select example">
                        <option value="progdas">{{$data->jenispel}}</option>
                        <option value="online">Online</option>
                        <option value="offline">Offline</option>
                    </select>
                </div>
                <div class="mb-3 text-light">
                    <label for="exampleInputEmail1" class="form-label" style="color: white;">Keterangan</label>
                    <input type="text" name="ket" class="form-control" value="{{$data->ket}}" id="exampleInputEmail1"
                        aria-describedby="emailHelp"value="{{$data->ket}}" style="color: white;">
                </div>
                <div class="mb-3 text-light">
                    <label for="exampleInputEmail1" class="form-label" style="color: white;">Dokumentasi</label>
                    <input type="input" name="dokumen" class="form-control" value="{{$data->dokumen}}" id="exampleInputEmail1"
                        aria-describedby="emailHelp"value="{{$data->dokumen}}"   style="color: white;">
                </div>

                <div class="mb-3 text-light">
                    <label for="exampleInputEmail1" class="form-label" style="color: white;">Link</label>
                    <input type="text" name="link" class="form-control" value="{{$data->link}}" id="exampleInputEmail1"
                        aria-describedby="emailHelp"value="{{$data->link}}" style="color: white;">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
