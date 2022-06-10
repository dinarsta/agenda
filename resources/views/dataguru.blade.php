@extends('layout.main')
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
<div class="card col-10" style=" margin:auto;background:#191c24;">
        <div class="card-body">
            <h1 class="text-center mb-4 text-light">Data Guru</h1>
           <a href="/tambahguru" class="btn btn-success mb-3">ADD</a>
       <div class="row">
            <table class="table">
                <thead>
                    <tr class="text-light">
                        <th scope="col">ID</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">NIK</th>
                        <th scope="col">Mata Pelajaran</th>
                        <th scope="col">Username</th>
                        <th scope="col">Password</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($data as $row)
                    <tr class="text-light">
                        <th scope="row">{{$no++}}</th>
                        <td>{{$row->nmguru}}</td>
                        <td>{{$row->nikguru}}</td>
                        <td>{{$row->mapel}}</td>
                        <td>{{$row->usguru}}</td>   
                        <td>{{$row->pwguru}}</td>
                        <td>

                            <a href="/tampilkandataguru/{{$row->id }}" class="btn btn-info">Edit</a>
                            <a href="/deletedataguru/{{$row->id }}" class="btn btn-danger delete">Delete</a>
                        </td>
                    </tr>
                    @endforeach



                </tbody>
            </table>
        </div>
        </div>
    </div>
    
    <!-- Optional JavaScript; choose one of the two! -->
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


    {{-- jquwery --}}
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    
    {{-- sweetalert --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>
<script>
//     $('.delete').click(function () {
//         var guruid = $(this).attr('data-id');
//         swal({
//             title: "Yakin?",
//             text: "kamu akan menghapus Data Guru Dengan id " + guruid + "",
//             icon: "warning",
//             buttons: true,
//             dangerMode: true,
//         })
//         .then((willDelete) => {
//             if (willDelete) {
//                 window.location = "/deletedataguru/" + guruid + ""
//                 swal("Data Berhasil Dihapus!", {
//                     icon: "success",
//                 });
//             } else {
//                 swal("Dibatalkan!");
//             }
//         });
//     });
    
// </script>

</html>

@endsection