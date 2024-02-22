@extends('layout.admin')
@section('title', 'User')
@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Pengguna</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Pengguna</li>
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

                            <a href="/tambahUser" class="btn btn-primary mt-2 mb-2">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <table id="table-user" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Lengkap</th>
                                        <th>Nomer Loket</th>
                                        <th>Kode Antrian</th>
                                        <th>Jenis Loket</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Harris</td>
                                        <td>Loket 1</td>
                                        <td>A</td>
                                        <td>Layanan Pendaftaran</td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-warning"><span
                                                    class="fas fa-edit"></span></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>admin</td>
                                        <td>Loket 1</td>
                                        <td>A</td>
                                        <td>Layanan Pendaftaran</td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-warning"><span
                                                    class="fas fa-edit"></span></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Deny</td>
                                        <td>Loket 1</td>
                                        <td>A</td>
                                        <td>Layanan Pendaftaran</td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-warning"><span
                                                    class="fas fa-edit"></span></a>
                                            <a href="" class="btn btn-sm btn-success"><span
                                                    class="fas fa-unlock-alt"></span></a>
                                            <form action="" method="" class="d-inline">
                                                <input type="hidden" name="_method" value="delete"> <input type="hidden"
                                                    name="_token" value="FGhSz76DlgHYQ3zAkDYj3mFVVV4afxYGh2u29zjE">
                                                <button class="btn btn-danger btn-sm border-0"
                                                    onclick="return confirm('Are you sure?')"><span
                                                        class="fas fa-trash"></span></button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>wahyu</td>
                                        <td>Loket 4</td>
                                        <td>D</td>
                                        <td>PENDATAAN KOLEKTIF</td>
                                        <td>
                                            <a href="i" class="btn btn-sm btn-warning"><span
                                                    class="fas fa-edit"></span></a>
                                            <a href="" class="btn btn-sm btn-success"><span
                                                    class="fas fa-unlock-alt"></span></a>
                                            <form action="" method="" class="d-inline">
                                                <input type="hidden" name="_method" value="delete"> <input type="hidden"
                                                    name="_token" value="FGhSz76DlgHYQ3zAkDYj3mFVVV4afxYGh2u29zjE">
                                                <button class="btn btn-danger btn-sm border-0"
                                                    onclick="return confirm('Are you sure?')"><span
                                                        class="fas fa-trash"></span></button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>babayo</td>
                                        <td>Loket 2</td>
                                        <td>B</td>
                                        <td>loket</td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-warning"><span
                                                    class="fas fa-edit"></span></a>
                                            <a href="" class="btn btn-sm btn-success"><span
                                                    class="fas fa-unlock-alt"></span></a>
                                            <form action="" method="" class="d-inline">
                                                <input type="hidden" name="_method" value="delete"> <input type="hidden"
                                                    name="_token" value="FGhSz76DlgHYQ3zAkDYj3mFVVV4afxYGh2u29zjE">
                                                <button class="btn btn-danger btn-sm border-0"
                                                    onclick="return confirm('Are you sure?')"><span
                                                        class="fas fa-trash"></span></button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>nanda</td>
                                        <td>Loket 3</td>
                                        <td>C</td>
                                        <td>PRESTASI</td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-warning"><span
                                                    class="fas fa-edit"></span></a>
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
