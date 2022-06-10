@extends('layout.main')
@section('content')
<div class="col-8 grid-margin stretch-card" style="margin: auto"; >
    <div class="card">
        <div class="card-body">
           <h4 class="card-title" style="text-align: center">FORM TAMBAH DATA</h4>
          <p class="card-description"> Edit Data Kelas </p>
            <form action="{{route ('insertdatamapel')}}" enctype="multipart/form-data" method="POST" >
                @csrf   
                <div class="mb-3 text-light">
                    <label for="exampleInputEmail1" class="form-label" style="color: white;">Mata Pelajaran</label>
                    <input type="text" name="mapel" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" style="color: white;">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
