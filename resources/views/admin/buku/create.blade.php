@extends('admin.layouts.main')
@section('container')
<!-- Main Content -->
<div id="content">
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 font-weight-bold"><i class="fas fa-user-md"></i> Data Dokter</h1>
        </div>

        {{-- Form insert data buku --}}
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <form action="/store_buku" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-2">
                                    <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                                    <select class="form-select" name="jenis_buku" aria-label="Default select example">
                                        <option selected>Pilih Jenis Buku</option>
                                        <option value="">Hukum Pidana</option>
                                        <option value="">Huku Perdata</option>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label for="judul" class="form-label">Nama Lengkap</label>
                                    <input type="text" name="name" class="form-control" id="judul"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="mb-2">
                                    <label for="exampleInputEmail1" class="form-label">No Telepon</label>
                                    <input type="number" name="telepon" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->
    @endsection