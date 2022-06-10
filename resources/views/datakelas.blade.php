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
            <h1 class="text-center mb-4 text-light">Data Kelas</h1>
            <a href="/tambahkelas" class="btn btn-success mb-3">ADD</a>
            <div class="row">
                <table class="table">
                    <thead class="text-light">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Wali Kelas</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-light">
                        @php
                        $no = 1;
                        @endphp
                        @foreach ($data as $row)
                        <tr>
                            <th scope="row">{{$no++}}</th>
                            <td>{{$row->walikelas}}</td>
                            <td>{{$row->nmkelas}}</td>
                            <td>

                                <a href="/tampilkandatakelas/{{$row->id }}" class="btn btn-info">Edit</a>
                                <a href="/deletedatakelas/{{$row->id }}" class="btn btn-danger delete" >Delete</a>
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
    $('.delete').click(function () {
        var kelasid = $(this).attr('data-id');
        swal({
                title: "Yakin?",
                text: "kamu akan menghapus Data Kelas Dengan id " + kelasid + "",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/deletedatakelas/" + kelasid + ""
                    swal("Data Berhasil Dihapus!", {
                        icon: "success",
                    });
                } else {
                    swal("Dibatalkan!");
                }
            });
    });

</script>

</html>
@endsection
