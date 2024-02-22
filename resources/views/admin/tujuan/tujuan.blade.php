@extends('layout.admin')
@section('title', 'Tujuan')
@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Tujuan Loket</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Tujuan</li>
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
                            <a href="/tambahTujuan" class="btn btn-primary mt-2 mb-2">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Kode Antrian</th>
                                        <th>Jenis</th>
                                        <th>Keterangan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>A</td>
                                        <td>PENDAFTARAN</td>
                                        <td>Layanan Pendaftaran</td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-success"><span
                                                    class="fas fa-th"></span></a>
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
                                        <td>B</td>
                                        <td>informasi</td>
                                        <td>loket</td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-success"><span
                                                    class="fas fa-th"></span></a>
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
                                        <td>3</td>
                                        <td>C</td>
                                        <td>Online</td>
                                        <td>PRESTASI</td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-success"><span
                                                    class="fas fa-th"></span></a>
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
                                        <td>D</td>
                                        <td>Pendataan</td>
                                        <td>PENDATAAN KOLEKTIF</td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-success"><span
                                                    class="fas fa-th"></span></a>
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
                                        <td>5</td>
                                        <td>E</td>
                                        <td>mandiri</td>
                                        <td>PENDATAAN MANDIRI</td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-success"><span
                                                    class="fas fa-th"></span></a>
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
