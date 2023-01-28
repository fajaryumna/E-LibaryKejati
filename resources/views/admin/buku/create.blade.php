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
                            <form action="{{ route('store_buku') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-2">
                                    <label for="exampleInputEmail1" class="form-label">Jenis Buku</label>
                                    <select class="form-select" name="jenis_buku" aria-label="Default select example">
                                        <option value="HUKUM PIDANA">HUKUM PIDANA</option>
                                        <option value="HUKUM PERDATA">HUKUM PERDATA</option>
                                        <option value="AGAMA ISLAM">AGAMA ISLAM</option>
                                        <option value="ILMU HUKUM">ILMU HUKUM</option>
                                        <option value="BAHASA INGGRIS">BAHASA INGGRIS</option>
                                        <option value="UMUM">UMUM</option>
                                        <option value="MAJALAH">MAJALAH</option>
                                        <option value="HPPRI">HPPRI</option>
                                        <option value="YURISPRUDENSI">YURISPRUDENSI</option>
                                        <option value="UNDANG-UNDANG">UNDANG-UNDANG</option>
                                        <option value="KEJAKSAAN">KEJAKSAAN</option>
                                        <option value="PERUNDANG-UNDANGAN">PERUNDANG-UNDANGAN</option>
                                        <option value="PERATURAN DAERAH">PERATURAN DAERAH</option>
                                        <option value="UU">UU</option>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label for="judul" class="form-label">Judul Buku</label>
                                    <input type="text" name="judul_buku" class="form-control" id="judul">
                                </div>
                                <div class="mb-2">
                                    <label for="nama_pengarang" class="form-label">Nama Pengarang</label>
                                    <input type="text" name="nama_pengarang" class="form-control" id="">
                                </div>
                                <div class="mb-2">
                                    <label for="nama_pengarang" class="form-label">Penerbit Buku</label>
                                    <input type="text" name="penerbit" class="form-control" id="">
                                </div>
                                <div class="mb-2">
                                    <label for="nama_pengarang" class="form-label">Nomor Rak</label>
                                    <input type="text" name="no_rak" class="form-control" id="">
                                </div>
                                <div class="mb-2">
                                    <label for="nama_pengarang" class="form-label">Tahun Terbit</label>
                                    <input type="number" name="tahun_terbit" class="form-control" id="">
                                </div>
                                <div class="mb-2">
                                    <label for="nama_pengarang" class="form-label">Jumlah Buku</label>
                                    <input type="number" name="jumlah" class="form-control" id="">
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
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