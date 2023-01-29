@extends('admin.layouts.main')
@section('container')
<!-- Main Content -->
<div id="content" style="width: 100%">
    <!-- Begin Page Content -->
    @foreach ($peminjaman as $p)
    <div class="create-main">
        <h3 class="title">Extend <span class="teks-ungu">Peminjaman</span></h3>
        <form class="entri" action="{{ route('update_peminjaman', $p->id) }}" method="POST"
            enctype="multipart/form-data">
            <h5 class="title">Update Data Peminjaman Buku</h5>
            <hr color="black" width="100%" style="height: 1px">
            @csrf
            <div class="mb-2 d-flex">
                <label for="judul" class="form-label">Judul Buku</label>
                <input type="text" name="judul" class="form-control entri" id="judul" value="{{ $p->judul }}" disabled>
            </div>
            <div class="mb-2 d-flex">
                <label for="nama_pengarang" class="form-label">Nama Peminjam</label>
                <input type="text" name="nama" class="form-control entri" id="" value="{{ $p->nama }}" disabled>
            </div>
            <div class="mb-2 d-flex">
                <label for="nama_pengarang" class="form-label">Tanggal Pinjam</label>
                <input type="date" name="tanggal_pinjam" class="form-control entri" id=""
                    value="{{ $p->tanggal_pinjam }}" disabled>
            </div>
            @php
            $tanggal_pengembalian = new DateTime($p->tanggal_pengembalian);
            $tanggal_pengembalian->add(new DateInterval('P7D'));
            $tanggal_maksimal = $tanggal_pengembalian->format('Y-m-d');
            @endphp
            <div class="mb-2 d-flex">
                <label for="nama_pengarang" class="form-label">Tanggal Kembali</label>
                <input type="date" name="tanggal_pengembalian" class="form-control entri" id=""
                    value="{{ $p->tanggal_pengembalian }}" max="{{ $tanggal_maksimal }}">
            </div>
            <div class="mb-2 d-flex">
                <a href="/data_peminjaman" style="width:18%;">
                    <button class="btn" style="width:100%; background-color: #d9d9d9; font-size: small;">Kembali</button>
                </a>
                <button type="submit" class="btn" style="width:80%; background-color: #067321; color: white; font-size: small;">Simpan Data Peminjaman</button>

            </div>
        </form>
    </div>
    @endforeach

    <!-- End of Main Content -->
    @endsection