@extends('layout.admin')
@section('title', 'Dashboard')
@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Home</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <h5 class="mb-2">Info SIM Antrian</h5>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="far fa-bookmark"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Total Antrian</span>
                            <span class="info-box-number">
                                <h4>
                                    <b>0</b>
                                </h4>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-danger"><i class="fa fa-th"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Total Loket</span>
                            <span class="info-box-number">
                                <h4>
                                    <b>4</b>
                                </h4>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-warning"><i class="far fa-flag"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Total Tujuan Antrian</span>
                            <span class="info-box-number">
                                <h4>
                                    <b>5</b>
                                </h4>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-success"><i class="far fa-user"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Total Pengguna</span>
                            <span class="info-box-number">
                                <h4>
                                    <b>6</b>
                                </h4>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <h5 class="mb-2 mt-4">Tools Antrian</h5>
            <div class="row">
                <div class="col-md-4">

                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>0</h3>
                            <p>Reset Antrian</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-bookmark"></i>
                        </div>
                        <form action="" method="">
                            <input type="hidden" name="_token" value="QKK1By8vjx9ZBh2SA0nBhC9izQqG2c2UBpBtUb8T">
                            <input type="hidden" id="user_id" name="user_id" value="1">
                            <button type="submit" class="btn btn-block btn-danger btn-sm"
                                onclick="return confirm('Are you sure?')">Reset <i
                                    class="fas fa-arrow-circle-right"></i></button>
                        </form>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>0</h3>
                            <p>Antarmuka Antrian</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-bookmark"></i>
                        </div>
                        <a href="" target="_blank" class="small-box-footer">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>0</h3>
                            <p>Antarmuka Display</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-bookmark"></i>
                        </div>
                        <a href="" target="_blank" class="small-box-footer">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <h5 class="mt-4 mb-2">Info Antrian</h5>
            <div class="row"></div>
        </div>
    </section>
</div>

@endsection
