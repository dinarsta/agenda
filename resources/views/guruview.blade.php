@extends('layout.main')
@section('content')
<div class="row">
    <div class="card col-12" style=" margin:auto;background:#191c24;">
        <div class="card-body">
            <h1 class="text-center mb-4 text-light">Data Agenda</h1>
            <section id="form">
                <form action="/insertdataguruview/" method="POST" enctype="multipart/form-data" class="mb-5">
                @csrf
                <div class="mb-3 text-light">
                    <label for="exampleInputEmail1" class="form-label" style="color: white;">Nama Guru</label>
                    <input type="text" name="nmguru" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" style="color: white;">
                </div>
                <div class="mb-3 text-light">
                    <label for="exampleInputEmail1" class="form-label" style="color: white;">Materi</label>
                    <input type="text" name="materi" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" style="color: white;">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label  text-light">Mata Pelajaran</label>
                    <select class="form-select" name="mapel" aria-label="Default select example">
                        <option value="progdas">Pilih Mata Pelajaran</option>
                        <option value="Pemrograman Dasar">Pemrograman Dasar</option>
                        <option value="Pemodelan Perangkat Lunak">Pemodelan Perangkat Lunak</option>
                        <option value="Pemrograman Berorientasi Objek">Pemrograman Berorientasi Objek</option>
                        <option value="Dasar Desain grafis">Dasar Desain grafis</option>
                        <option value="Basis Data">Basis Data</option>

                    </select>
                    <div class="mb-3 text-light">
                    <label for="exampleInputEmail1" class="form-label" style="color: white;">Jam Pelajaran</label>
                    <input type="text" name="jampel" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" style="color: white;">
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
                    <input type="text" name="tdkhadir" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" style="color: white;">
                </div>
                
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label  text-light">Jenis Pembelajaran</label>
                    <select class="form-select" name="jenispel" aria-label="Default select example">
                        <option value="progdas">Pilih Jenis Pembelajaran</option>
                        <option value="online">Online</option>
                        <option value="offline">Offline</option>
                    </select>
                </div>
                <div class="mb-3 text-light">
                    <label for="exampleInputEmail1" class="form-label" style="color: white;">Keterangan</label>
                    <input type="text" name="ket" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" style="color: white;">
                </div>
                <div class="mb-3 text-light">
                    <label for="exampleInputEmail1" class="form-label" style="color: white;">Dokumentasi</label>
                    <input type="file" name="dokumen" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" style="color: white;">
                </div>

                <div class="mb-3 text-light">
                    <label for="exampleInputEmail1" class="form-label" style="color: white;">Link</label>
                    <input type="text" name="link" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" style="color: white;">
                </div>

                <button type="submit" class="btn btn-light">Submit</button>
            </form>
            </section>
            
            <div class="row">
                <table class="table">
                    <thead class="text-light">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama Guru</th>
                            <th scope="col">Materi</th>
                            <th scope="col">Mata Pelajaran</th>
                            <th scope="col">Jam Pelajaran</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Absen</th>
                            <th scope="col">Jenis</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Dokumentasi</th>
                            <th scope="col">Link</th>
                        </tr>
                    </thead>
                    <tbody class="text-light">
                        @php
                        $no = 1;
                        @endphp
                        @foreach ($data as $row)
                        <tr>
                            <th scope="row">{{$no++}}</th>
                            <td>{{$row->nmguru}}</td>
                            <td>{{$row->materi}}</td>
                            <td>{{$row->mapel}}</td>
                            <td>{{$row->jampel}}</td>
                            <td>{{$row->nmkelas}}</td>
                            <td>{{$row->tdkhadir}}</td>
                            <td>{{$row->jenispel}}</td>
                            <td>{{$row->tdkhadir}}</td>
                            <td>
                                <a href="{{asset ('dokumen/'.$row->dokumen) }}" target="blank"
                                    rel="noopener noreferer">Link Gambar</a>
                            </td>
                            <td>{{$row->link}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
@endsection
