@extends('layout.admin')
@section('title', 'Tambah Loket')
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
                        <li class="breadcrumb-item"><a href="/loket">Loket</a>
                        </li>
                        <li class="breadcrumb-item active">Tambah</li>
                    </ol>
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
                            <h3 class="card-title">Tambah Loket</h3>
                        </div>
                        <form id="quickForm" action="" method="">
                            <input type="hidden" name="_token" value="ebRneyf1hpirXfVYYHnIeklIFpYO6TtI8ObZvY87">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Nama Loket</label>
                                    <input type="text" name="name" id="name" class="form-control "
                                        placeholder="Nama Loket" value="">
                                </div>
                                <div class="form-group">
                                    <label for="nomor">Nomor Loket</label>
                                    <input type="number" name="nomor" id="nomor" min="1" max="10" class="form-control "
                                        placeholder="Nomor Loket" value="">
                                </div>
                                <div class="form-group">
                                    <label for="purpose_id">Jenis Antrian</label>
                                    <select name="purpose_id" id="purpose_id" class="form-control ">
                                        <option value="5" class="form-control">Layanan Pendaftaran (Kode: A)</option>
                                        <option value="21" class="form-control">loket (Kode: B)</option>
                                        <option value="22" class="form-control">PRESTASI (Kode: C)</option>
                                        <option value="24" class="form-control">PENDATAAN KOLEKTIF (Kode: D)</option>
                                        <option value="25" class="form-control">PENDATAAN MANDIRI (Kode: E)</option>
                                    </select>
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
