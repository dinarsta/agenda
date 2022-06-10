@extends('layout.main')
@section('content')
<div class="col-8 grid-margin stretch-card" style="margin: auto">

    <div class="card">
        <div class="card-body">
            <h4 class="card-title" style="text-align: center">FORM</h4>
             <p class="card-description"> Edit Data Mapel </p>
            <form action="/updatedatamapel/{{$data->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label" style="color:whit;">Mata Pelajaran</label>
                    <input type="text" name="mapel" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" value="{{$data->mapel}}" style="color: white">
                </div>
                <button type="submit" class="btn btn-primary mt-4">Submit</button>
            </form>
        </div>
    </div>
</div>



@endsection
