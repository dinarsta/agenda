{{-- @extends('layout.main')
@section('content')
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>guru</title>
</head>

<body>
        
    <h1 class="text-center mb-4 text-light">Tambah Data Guru</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <form action="/insertdataguru/" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label  text-light">Nama Lengkap</label>
                        <input type="text" name="nmguru" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label  text-light">NIK</label>
                        <input type="number"  name="nikguru" class="form-control" id="exampleInputPassword1">
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
                        <label for="exampleInputEmail1" class="form-label text-light">Username</label>
                        <input type="text"  name="usguru" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label  text-light">Password</label>
                        <input type="password"  name="pwguru" class="form-control" id="exampleInputEmail1"aria-describedby="emailHelp">

                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>
@endsection --}}

@extends('layout.main')
@section('content')
<div class="col-8 grid-margin stretch-card" style="margin: auto"; >
    <div class="card">
        <div class="card-body">
           <h4 class="card-title" style="text-align: center">FORM TAMBAH DATA</h4>
          <p class="card-description"> Tambah Data Guru </p>
            <form action="/insertdataguru/" method="POST"enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label  text-light">Nama Lengkap</label>
                        <input type="text" name="nmguru" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  style="color: white;>

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label  text-light">NIK</label>
                        <input type="number"  name="nikguru" class="form-control" id="exampleInputPassword1"  style="color: white;>
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
                        <label for="exampleInputEmail1" class="form-label text-light">Username</label>
                        <input type="text"  name="usguru" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="color: white">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label  text-light">Password</label>
                        <input type="password"  name="pwguru" class="form-control" id="exampleInputEmail1"aria-describedby="emailHelp" style="color: white">

                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
        </div>
    </div>
</div>
@endsection