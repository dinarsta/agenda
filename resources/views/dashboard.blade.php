@extends('layout.main')
@section('content')
<div class="row">

    @if (auth()->user()->role == 'admin')
    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">{{$dataguru}}</h3>
                            <a href="/guru" style="text-decoration: none">
                                <p class="text-success ms-2 mb-0 font-weight-medium">DATA GURU</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="icon icon-box-success ">
                            <a href="/guru" style="text-decoration: none"><span
                                    class="mdi mdi-arrow-top-right icon-item"></span></a>
                        </div>
                    </div>
                </div>
                <h6 class="text-muted font-weight-normal">Data Guru </h6>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">{{$datakelas}}</h3>

                            <p class="text-success ms-2 mb-0 font-weight-medium">DATA KELAS</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="icon icon-box-success">
                            <a href="/kelas"><span class="mdi mdi-arrow-top-right icon-item"></span></a>
                        </div>
                    </div>
                </div>
                <h6 class="text-muted font-weight-normal">Data Kelas</h6>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">{{$datamapel}}</h3>
                            <p class="text-success ms-2 mb-0 font-weight-medium">DATA Mapel</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="icon icon-box-success">
                            <a href="/mapel"><span class="mdi mdi-arrow-top-right icon-item"></span></a>
                        </div>
                    </div>
                </div>
                <h6 class="text-muted font-weight-normal">Data Mapel</h6>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">{{$dataagenda}}</h3>
                         
                                <p class="text-success  ms-2 mb-0 font-weight-medium">DATA AGENDA</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="icon icon-box-success ">
                            <a href="/agendatbs"><span class="mdi mdi-arrow-top-right icon-item"></span></a>
                        </div>
                    </div>
                </div>
                <h6 class="text-muted font-weight-normal">Data Agenda</h6>
            </div>
        </div>
    </div>
    @endif

    @if (auth()->user()->role == 'user')
    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                            <p class="text-success mb-0 font-weight-medium">DATA AGENDA</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="icon icon-box-success ">
                            <a href="/guruview"><span class="mdi mdi-arrow-top-right icon-item"></span></a>
                        </div>
                    </div>
                </div>
                <h6 class="text-muted font-weight-normal">Data Agenda</h6>
            </div>
        </div>
    </div>
    @endif

</div>
<div class="card">
    <div class="card-body">
        <h4 class="card-title" style="color: white">DRAGENDA</h4>
        <div class="owl-carousel owl-theme full-width owl-carousel-dash portfolio-carousel" id="owl-carousel-basic">
            <div class="item">
                <img src="assets/images/dashboard/ga.jpg" alt="">
            </div>
            <div class="item">
                <img src="assets/images/dashboard/ya.jpg" alt="">
            </div>
            <div class="item">
                <img src="assets/images/dashboard/buku.jpg" alt="">
            </div>
        </div>
        <div class="d-flex py-4">
            <div class="preview-list w-50">
                <div class="preview-item p-0">
                    <div class="preview-thumbnail">
                        <img src="assets/images/faces/tb.png" class="rounded-circle" alt="">
                    </div>
                    <div class="preview-item-content d-flex flex-grow">
                        <div class="flex-grow">
                            <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                <h6 class="preview-subject">DRAGENDA</h6>
                                <p class="text-muted text-small">4 Hours Ago</p>
                            </div>
                            <p class="text-muted">Well, it seems to be working now.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p class="text-muted">Well, it seems to be working now. </p>
        <div class="progress progress-md portfolio-progress">
            <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="25"
                aria-valuemin="0" aria-valuemax="10"></div>
        </div>
    </div>
</div>
@endsection
