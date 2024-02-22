@extends('layout.admin')
@section('title', 'Tambah Data')
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
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item"><a href="/data">Outlet</a></li>
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
                            <h3 class="card-title">Tambah Outlet</h3>
                        </div>
                        <form id="quickForm" action="" method="" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="ebRneyf1hpirXfVYYHnIeklIFpYO6TtI8ObZvY87">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Nama Outlet</label>
                                    <input type="text" name="name" id="name" class="form-control "
                                        placeholder="Nama Outlet" value="">
                                </div>
                                <div class="form-group">
                                    <label for="address">Alamat Outlet</label>
                                    <input type="text" name="address" id="address" class="form-control "
                                        placeholder="Alamat Outlet" value="">
                                </div>
                                <div class="form-group">
                                    <label for="no_telp">No.Telepon</label>
                                    <input type="text" name="no_telp" id="no_telp" class="form-control "
                                        placeholder="No.Telepon Outlet" value="">
                                </div>
                                <div class="form-group row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
                                    <div class="col">
                                        <label for="header_color" class="form-label">Header Color</label>
                                        <input type="color" class="form-control form-control-color" id="header_color"
                                            name="header_color" value="#007bff" title="Choose your color">
                                    </div>
                                    <div class="col">
                                        <label for="box_display_color" class="form-label">Box Display Antrian
                                            Color</label>
                                        <input type="color" class="form-control form-control-color"
                                            id="box_display_color" name="box_display_color" value="#17a2b8"
                                            title="Choose your color">
                                    </div>
                                    <div class="col">
                                        <label for="box_ambil_color" class="form-label">Box Ambil Antrian Color</label>
                                        <input type="color" class="form-control form-control-color" id="box_ambil_color"
                                            name="box_ambil_color" value="#28a745" title="Choose your color">
                                    </div>
                                    <div class="col">
                                        <label for="text_color" class="form-label">Text Color</label>
                                        <input type="color" class="form-control form-control-color" id="text_color"
                                            name="text_color" value="#ffffff" title="Choose your color">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="running_text">Running Text</label>
                                    <textarea class="form-control " name="running_text" id="running_text" cols="30"
                                        rows="5"></textarea>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-2">
                                        <img class="img-preview img-fluid mb-3" width="100%" src="">
                                    </div>
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <label for="logo">Logo Outlet</label>
                                            <input type="file" name="logo" id="logo" class="form-control " value=""
                                                onchange="previewImage()">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>
    </section>
</div>

{{-- Script --}}
<script type="text/javascript">
    function previewImage() {
        const image = document.querySelector('#logo');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function (oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }

</script>

@endsection
