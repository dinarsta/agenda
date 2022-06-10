@extends('layout.main')
@section('content')
<div class="col-8 grid-margin stretch-card" style="margin: auto">

    <div class="card">
        <div class="card-body">
            <h4 class="card-title" style="text-align: center">FORM</h4>
             <p class="card-description"> Edit Data Kelas </p>
            <form action="/updatedatakelas/{{$data->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label" style="color:whit;">Wali Kelas</label>
                    <input type="text" name="walikelas" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" value="{{$data->walikelas}}"  style="color: white">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label" style="color:whit;">Kelas</label>
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
                <button type="submit" class="btn btn-primary mt-4">Submit</button>
            </form>
        </div>
    </div>
</div>



@endsection
