@extends('layout.admin')
@section('title', 'Data')
@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Outlet</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Outlet</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="/tambahData" class="btn btn-primary mt-2 mb-2">Tambah Data</a>
                        </div>

                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Outlet</th>
                                        <th>Alamat Outlet</th>
                                        <th>No.Telepon</th>
                                        <th>Theme</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            UPTD DISDUKCAPIL
                                            <span class="badge bg-success">aktif</span>
                                        </td>
                                        <td>Kecamatan Binawidya</td>
                                        <td>-</td>
                                        <td>

                                            <div class="d-flex">
                                                <div class="mr-1"
                                                    style="width: 1rem; height: 1rem; background-color: #56cdf5; border: 1px solid #000000;">
                                                </div>
                                                <div class="mr-1"
                                                    style="width: 1rem; height: 1rem; background-color: #e60000; border: 1px solid #000000;">
                                                </div>
                                                <div class="mr-1"
                                                    style="width: 1rem; height: 1rem; background-color: #e60000; border: 1px solid #000000;">
                                                </div>
                                                <div class="mr-1"
                                                    style="width: 1rem; height: 1rem; background-color: #ffffff; border: 1px solid #000000;">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <form action="" method="" class="d-inline">
                                                <input type="hidden" name="_method" value="put"> <input type="hidden"
                                                    name="_token" value="QKK1By8vjx9ZBh2SA0nBhC9izQqG2c2UBpBtUb8T">
                                                <button class="btn btn-success btn-sm border-0"
                                                    onclick="return confirm('Are you sure?')"><span
                                                        class="fas fa-check-square"></span></button>
                                            </form>
                                            <a href="" class="btn btn-sm btn-warning"><span
                                                    class="fas fa-edit"></span></a>
                                            <form action="" method="" class="d-inline">
                                                <input type="hidden" name="_method" value="delete"> <input type="hidden"
                                                    name="_token" value="QKK1By8vjx9ZBh2SA0nBhC9izQqG2c2UBpBtUb8T">
                                                <button class="btn btn-danger btn-sm border-0"
                                                    onclick="return confirm('Are you sure?')"><span
                                                        class="fas fa-trash"></span></button>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
