@extends('admin.layouts.main')
@section('container')
<!-- Main Content -->
<div id="content" style="width: 100%">
    <!-- Begin Page Content -->

    <div class="create-main">
        <h3 class="title">Edit Data <span class="teks-ungu">Buku</span></h3>
        <form class="entri" action="{{ route('update_buku', $buku->id) }}" method="POST" enctype="multipart/form-data">
            <h5 class="title">Update Data Buku</h5>
            <hr color="black" width="100%" style="height: 1px">
            @csrf
            <div class="mb-2 d-flex">
                <label for="exampleInputEmail1" class="form-label">Jenis Buku</label>
                <select class="form-select entri" name="jenis_buku" aria-label="Default select example">
                    <option selected>{{ $buku->jenis_buku }}</option>
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
            <div class="mb-2 d-flex">
                <label for="judul" class="form-label">Judul Buku</label>
                <input type="text" name="judul_buku" class="form-control entri" id="judul"
                    value="{{ $buku->judul_buku }}">
            </div>
            <div class="mb-2 d-flex">
                <label for="nama_pengarang" class="form-label">Nama Pengarang</label>
                <input type="text" name="nama_pengarang" class="form-control entri" id=""
                    value="{{ $buku->nama_pengarang }}">
            </div>
            <div class="mb-2 d-flex">
                <label for="nama_pengarang" class="form-label">Penerbit Buku</label>
                <input type="text" name="penerbit" class="form-control entri" id="" value="{{ $buku->penerbit }}">
            </div>
            <div class="mb-2 d-flex">
                <label for="nama_pengarang" class="form-label">Nomor Rak</label>
                <input type="text" name="no_rak" class="form-control entri" id="" value="{{ $buku->no_rak }}">
            </div>
            <div class="mb-2 d-flex">
                <label for="nama_pengarang" class="form-label">Tahun Terbit</label>
                <input type="number" name="tahun_terbit" class="form-control entri" id=""
                    value="{{ $buku->tahun_terbit }}">
            </div>
            <div class="mb-2 d-flex">
                <label for="nama_pengarang" class="form-label">Jumlah Buku</label>
                <input type="number" name="jumlah" class="form-control entri" id="" value="{{ $buku->jumlah }}">
            </div>
            <div class="mb-2 d-flex">
                <div>
                </div>
                <a href="/data_buku">
                    <button class="btn btn-warning submit-entri entri">Kembali</button>
                </a>
                <button type="reset" class="btn btn-warning submit-entri entri">Reset</button>
                <button type="submit" class="btn btn-primary submit-entri entri">Simpan data buku</button>

            </div>
        </form>
    </div>
    <!-- End of Main Content -->
    @endsection