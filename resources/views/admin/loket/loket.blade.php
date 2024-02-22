@extends('layout.admin')
@section('title', 'Loket')
@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Loket</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Loket</li>
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
                            <a href="/tambahLoket" class="btn btn-primary mt-2 mb-2">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Loket</th>
                                        <th>Nomer Loket</th>
                                        <th>Kode Antrian</th>
                                        <th>Jenis Antrian</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Loket</td>
                                        <td>1</td>
                                        <td>A</td>
                                        <td>Layanan Pendaftaran</td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-success"><span
                                                    class="fas fa-user"></span></a>
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
                                    <tr>
                                        <td>2</td>
                                        <td>loket</td>
                                        <td>2</td>
                                        <td>B</td>
                                        <td>loket</td>
                                        <td>
                                            <a href="/loket" class="btn btn-sm btn-success"><span
                                                    class="fas fa-user"></span></a>
                                            <a href="/loketEdit" class="btn btn-sm btn-warning"><span
                                                    class="fas fa-edit"></span></a>
                                            <form action="/loketDelete" method="" class="d-inline">
                                                <input type="hidden" name="_method" value="delete"> <input type="hidden"
                                                    name="_token" value="QKK1By8vjx9ZBh2SA0nBhC9izQqG2c2UBpBtUb8T">
                                                <button class="btn btn-danger btn-sm border-0"
                                                    onclick="return confirm('Are you sure?')"><span
                                                        class="fas fa-trash"></span></button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Loket</td>
                                        <td>3</td>
                                        <td>C</td>
                                        <td>PRESTASI</td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-success"><span
                                                    class="fas fa-user"></span></a>
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
                                    <tr>
                                        <td>4</td>
                                        <td>Loket</td>
                                        <td>4</td>
                                        <td>D</td>
                                        <td>PENDATAAN KOLEKTIF</td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-success"><span
                                                    class="fas fa-user"></span></a>
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
