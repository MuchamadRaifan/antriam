@extends('layout.admin')
@section('title', 'Tambah Pengguna')
@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Data Pengguna</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item"><a href="/user">Pengguna</a></li>
                        <li class="breadcrumb-item active">Tambah</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Pengguna</h3>
                        </div>
                        <form id="quickForm" action="" method="">
                            <input type="hidden" name="_token" value="QKK1By8vjx9ZBh2SA0nBhC9izQqG2c2UBpBtUb8T">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Nama Lengkap</label>
                                    <input type="text" name="name" id="name" class="form-control "
                                        placeholder="Nama Lengkap Pengguna" value="">
                                </div>
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" id="username" class="form-control "
                                        placeholder="Username Pengguna" value="">
                                </div>
                                <div class="form-group">
                                    <label for="loket_id">Loket</label>
                                    <select name="loket_id" id="loket_id" class="form-control ">
                                        <option value="1" class="form-control">Nomor 1 (Antrian Layanan Pendaftaran;
                                            Kode A) </option>
                                        <option value="16" class="form-control">Nomor 2 (Antrian loket; Kode B)
                                        </option>
                                        <option value="17" class="form-control">Nomor 3 (Antrian PRESTASI; Kode C)
                                        </option>
                                        <option value="18" class="form-control">Nomor 4 (Antrian PENDATAAN KOLEKTIF;
                                            Kode D) </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="role_id">Role</label>
                                    <select name="role_id" id="role_id" class="form-control ">
                                        <option value="1" class="form-control">admin </option>
                                        <option value="2" class="form-control">user </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control " placeholder="Password" id="password"
                                        name="password">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">

                </div>
            </div>
        </div>
    </section>
</div>

@endsection
