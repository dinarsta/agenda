@extends('layout.main')
@section('content')
<div class="col-8 grid-margin stretch-card" style="margin: auto"; >
    <div class="card">
        <div class="card-body">
           <h4 class="card-title" style="text-align: center">FORM TAMBAH DATA</h4>
          <p class="card-description"> Edit Data Kelas </p>
            <form action="{{route ('insertdatakelas')}}" enctype="multipart/form-data" method="POST" >
                @csrf   
                <div class="mb-3 text-light">
                    <label for="exampleInputEmail1" class="form-label" style="color: white;">Wali Kelas</label>
                    <input type="text" name="walikelas" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" style="color: white;">

                </div>
                <div class="mb-3">
                     <label for="exampleInputEmail1" class="form-label">Pilih Kelas</label>
                  <select class="form-select" name="nmkelas" aria-label="Default select example" style="background:#2A3038; color:white ">
                       
                        <option value="X RPL 1">X RPL 1</option>
                        <option value="X RPL 2">X RPL 2</option>
                        <option value="XI RPL 1">XI RPL 1</option>
                        <option value="XI RPL 2">XI RPL 2</option>
                        <option value="XII RPL 1">XII RPL 1</option>
                        <option value="XII RPL 2">XII RPL 2</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
