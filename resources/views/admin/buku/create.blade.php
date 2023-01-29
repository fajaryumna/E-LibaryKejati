@extends('admin.layouts.main')
@section('container')
    <!-- Main Content -->
    <div id="content" style="width: 100%">
        <!-- Begin Page Content -->

        <div class="create-main">
            <h3 class="title">Entri <span class="teks-ungu">Buku</span></h3>
            <form class="entri" action="{{ route('store_buku') }}" method="POST" enctype="multipart/form-data">
                <h5 class="title">Masukkan Buku Baru</h5>
                <hr color="black" width="100%" style="height: 1px">
                @csrf
                <div class="mb-2 d-flex">
                    <label for="exampleInputEmail1" class="form-label">Jenis Buku</label>
                    <select class="form-select entri" name="jenis_buku" aria-label="Default select example">
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
                    <input type="text" name="judul_buku" class="form-control entri" id="judul">
                </div>
                <div class="mb-2 d-flex">
                    <label for="nama_pengarang" class="form-label">Nama Pengarang</label>
                    <input type="text" name="nama_pengarang" class="form-control entri" id="">
                </div>
                <div class="mb-2 d-flex">
                    <label for="nama_pengarang" class="form-label">Penerbit Buku</label>
                    <input type="text" name="penerbit" class="form-control entri" id="">
                </div>
                <div class="mb-2 d-flex">
                    <label for="nama_pengarang" class="form-label">Nomor Rak</label>
                    <input type="text" name="no_rak" class="form-control entri" id="">
                </div>
                <div class="mb-2 d-flex">
                    <label for="nama_pengarang" class="form-label">Tahun Terbit</label>
                    <input type="number" name="tahun_terbit" class="form-control entri" id="">
                </div>
                <div class="mb-2 d-flex">
                    <label for="nama_pengarang" class="form-label">Jumlah Buku</label>
                    <input type="number" name="jumlah" class="form-control entri" id="">
                </div>
                <div class="mb-2 d-flex">
                    <div>
                    </div>
                    <button type="submit" class="btn submit-entri entri">Simpan data buku</button>

                </div>
            </form>
        </div>
        <!-- End of Main Content -->
    @endsection
