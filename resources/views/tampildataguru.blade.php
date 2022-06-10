@extends('layout.main')
@section('content')
<div class="col-8 grid-margin stretch-card" style="margin: auto">

    <div class="card">
        <div class="card-body">
            <h4 class="card-title" style="text-align: center">FORM EDIT</h4>
             <p class="card-description"> Edit Data Guru </p>
              <form action="/updatedataguru/{{$data->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                        <input type="text" name="nmguru" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->nmguru}}" style="color: white">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">NIK</label>
                        <input type="number"  name="nikguru" class="form-control" id="exampleInputPassword1"  value="{{$data->nikguru}}" style="color: white">
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
                       

                    </div>
         
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                        <input type="text"  name="usguru" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  value="{{$data->usguru}}"  style="color: white">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Password</label>
                        <input type="text"  name="pwguru" class="form-control" id="exampleInputEmail1"aria-describedby="emailHelp" value="{{$data->pwguru}}" style="color: white">

                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
        </div>
    </div>
</div>



@endsection
