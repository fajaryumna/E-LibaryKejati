@extends('user.navtop')
@section('content')
<div>
    <h2 class="koleksi-buku-text">PEMINJAMAN <span class="teks-ungu">BUKU</span></h2>
    <div class="text-center">
        <h2 class="text-pencarian">PENCARIAN</h2>
        <form id="selectform">
            <div class="search-fields" id="selectform">
                <div class="searches">
                    <h4 class="search-text">Judul Buku:</h4>
                    <input class="search-field" id="judul-buku" name="judul_buku" type="text"
                        value="{{ request('judul_buku') }}" placeholder="Judul Buku">
                </div>
                <div class="searches">
                    <h4 class="search-text">Pengarang:</h4>
                    <input class="search-field" id="pengarang-buku" name="nama_pengarang" type="text"
                        value="{{ request('nama_pengarang') }}" placeholder="Pengarang">
                </div>
                <div class="searches">
                    <h4 class="search-text">Penerbit:</h4>
                    <input class="search-field" id="penerbit-buku" name="penerbit" type="text"
                        value="{{ request('penerbit') }}" placeholder="Penerbit">
                </div>
                <div class="searches">
                    <h4 class="search-text">Tahun Terbit:</h4>
                    <input class="search-field" id="tahun-buku" name="tahun_terbit" type="text"
                        value="{{ request('tahun_terbit') }}" placeholder="Tahun Terbit">
                </div>
                <div class="searches">
                    <h4 class="search-text">Jenis Buku:</h4>
                    <input class="search-field" id="jenis-buku" name="jenis_buku" type="text"
                        value="{{ request('jenis_buku') }}" placeholder="Jenis Buku">
                </div>

            </div>
            <div class="search-buttons">
                <button href="#" class="search-button" id="search-button-search">Cari</button>
                <button href="#" class="search-button" id="search-button-reset" type="reset" onclick="document.getElementById('selectform').reset();
                 document.getElementById('judul-buku').value = null;
                 document.getElementById('pengarang-buku').value = null;
                 document.getElementById('penerbit-buku').value = null;
                 document.getElementById('tahun-buku').value = null;
                 document.getElementById('jenis-buku').value = null;
                 return false;">Reset</button>
            </div>
        </form>
    </div>
</div>

<form action="{{ route('store_peminjaman') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="tabel-buku">
        <h5>Menampilkan
            <span class="jumlah-buku"><button class="jumlah-buku-dropbtn">10</button>
                <span class="jumlah-buku-contents">
                    <a class="jumlah-buku-content" href="#">10</a>
                    <a class="jumlah-buku-content" href="#">20</a>
                    <a class="jumlah-buku-content" href="#">50</a>
                    <a class="jumlah-buku-content" href="#">100</a>
                </span></span> data
        </h5>
        <div class="display-flex-between">
            <h4 class="juduls " id="no_buku">No
                <span class="material-symbols-outlined">
                    unfold_more
                </span>
            </h4>
            <h4 class="juduls ">Judul Buku
                <span class="material-symbols-outlined">
                    unfold_more
                </span>
            </h4>
            <h4 class="juduls ">Pengarang <span class="material-symbols-outlined">
                    unfold_more
                </span></h4>
            <h4 class="juduls ">Penerbit <span class="material-symbols-outlined">
                    unfold_more
                </span></h4>
            <h4 class="juduls ">Tahun Terbit <span class="material-symbols-outlined">
                    unfold_more
                </span></h4>
            <h4 class="juduls " id="no_buku">Jumlah <span class="material-symbols-outlined">
                    unfold_more
                </span></h4>
            <h4 class="juduls ">Jenis Buku <span class="material-symbols-outlined">
                    unfold_more
                </span></h4>
            <h4 class="juduls ">Pinjam <span class="material-symbols-outlined">
                    check_box
                </span></h4>

        </div>
        <hr color="black" width="100%" size="1px">

        @php
        $nomor = $datas->currentPage() * 10 - 10 + 1;
        @endphp

        @foreach ($datas as $data)
        @if ($nomor % 2 == 1)
        <div class="display-flex-between">
            @else
            <div class="display-flex-between even-buku">
                @endif

                <h4 class="juduls buku" id="no_buku">{{ $nomor++ }}</h4>
                <h4 class="juduls buku">{{ $data->judul_buku }}</h4>
                <h4 class="juduls buku">{{ $data->nama_pengarang }}</h4>
                <h4 class="juduls buku text-center">{{ $data->penerbit }}</h4>
                <h4 class="juduls buku text-center">{{ $data->tahun_terbit }}</h4>
                <h4 class="juduls buku" id="no_buku">{{ $data->jumlah }}</h4>
                <h4 class="juduls buku text-center">{{ $data->jenis_buku }}</h4>
                <input class="juduls buku" type="checkbox" id="{{ $data->id }}" name="buku_id[]"
                    value="{{ $data->id }}">

            </div>
            @endforeach

            <hr color="black" width="100%" size="1px">
            <div class="bottom-buttons">
                <div></div>
                <div id="bottom-right">
                    <p>Halaman {{ $datas->currentPage() }}/{{ $datas->lastPage() }}</p>
    
                    {{-- Kalo selain di page pertama, tampilin tombol "sebelumnya" --}}
                    @if ($datas->currentPage() != 1)
                        {{-- <style>
                            #bottom-right {
                                width: 63%;
                            }
                        </style> --}}
                        <a href="{{ $datas->previousPageUrl() }}">
                            <button id="tabel-sebelumnya">
                                <- Sebelumnya </button>
                        </a>
                    @endif
    
                    {{-- kalo di page yang ga nampilin page pertama, tampilin simbol untuk bisa akses page pertama --}}
                    @if ($datas->currentPage() >= 4)
                        <a href="{{ $datas->url(1) }}">
                            <button class="tabel-nomor">
                                &lt;&lt;
                            </button>
                        </a>
                    @endif
    
                    {{-- kalo lagi di last page, tampilin prev page sampe -4 --}}
                    @if ($datas->currentPage() == $datas->lastPage() && $datas->lastPage() >= 5)
                        <a href="{{ $datas->url($datas->currentPage() - 4) }}">
                            <button class="tabel-nomor">{{ $datas->currentPage() - 4 }}</button>
                        </a>
                        <a href="{{ $datas->url($datas->currentPage() - 3) }}">
                            <button class="tabel-nomor">{{ $datas->currentPage() - 3 }}</button>
                        </a>
                    {{-- Sama kaya sebelumnya tapi -1 --}}
                    @elseif ($datas->currentPage() == $datas->lastPage() - 1 && $datas->lastPage() >= 4)
                        <a href="{{ $datas->url($datas->currentPage() -3) }}">
                            <button class="tabel-nomor">{{ $datas->currentPage() - 3 }}</button>
                        </a>
                    @endif
    
                    {{-- Tampilin prev page -2 kalo lagi di page lebih dari 3 --}}
                    @if ($datas->currentPage() >= 3 || $datas->currentPage() == $datas->lastPage() && $datas->lastPage() >= 3)
                        <a href="{{ $datas->url($datas->currentPage() - 2) }}">
                            <button class="tabel-nomor">{{ $datas->currentPage() - 2 }}</button>
                        </a>
                        <a href="{{ $datas->url($datas->currentPage() - 1) }}">
                            <button class="tabel-nomor">{{ $datas->currentPage() - 1 }}</button>
                        </a>
                    {{-- Kalo di page 2, tampilin prev pagenya 1 aja --}}
                    @elseif ($datas->currentPage() == 2 && $datas->lastPage() >= 2)
                        <a href="{{ $datas->url($datas->currentPage() - 1) }}">
                            <button class="tabel-nomor">{{ $datas->currentPage() - 1 }}</button>
                        </a>
                    @endif
    
                    {{-- Tampilin page sekarang --}}
                    @if ($datas->lastPage() != 1)
                    <a href="{{ $datas->url($datas->currentPage()) }}">
                        <button class="tabel-nomor" id="nomor-terpilih">{{ $datas->currentPage() }}</button>
                    </a>
                    @endif
    
                    {{-- Kalo next page cuman ada 1, munculinnya 1 aja --}}
                    @if ($datas->currentPage() == $datas->lastPage() - 1 && $datas->lastPage() >= 2)
                        <a href="{{ $datas->url($datas->currentPage() + 1) }}">
                            <button class="tabel-nomor">{{ $datas->currentPage() + 1 }}</button>
                        </a>
                    {{-- Sisanya normal aja nampilin 2 next page --}}
                    @elseif ($datas->currentPage() != $datas->lastPage() && $datas->lastPage() >= 3)
                        <a href="{{ $datas->url($datas->currentPage() + 1) }}">
                            <button class="tabel-nomor">{{ $datas->currentPage() + 1 }}</button>
                        </a>
                        <a href="{{ $datas->url($datas->currentPage() + 2) }}">
                            <button class="tabel-nomor">{{ $datas->currentPage() + 2 }}</button>
                        </a>
                    @endif
    
                    {{-- Kalo page 1, tampilin next page sampe +4 --}}
                    @if ($datas->currentPage() == 1 && $datas->lastPage() >= 4)
                        <a href="{{ $datas->url($datas->currentPage() + 3) }}">
                            <button class="tabel-nomor">{{ $datas->currentPage() + 3 }}</button>
                        </a>
                        <a href="{{ $datas->url($datas->currentPage() + 4) }}">
                            <button class="tabel-nomor">{{ $datas->currentPage() + 4 }}</button>
                        </a>
                        {{-- Kalo page 2, tampilin next page sampe +3 --}}
                    @elseif ($datas->currentPage() == 2 && $datas->lastPage() >= 3)
                        <a href="{{ $datas->url($datas->currentPage() + 3) }}">
                            <button class="tabel-nomor">{{ $datas->currentPage() + 3 }}</button>
                        </a>
                    @endif
    
                    {{-- Kalo lagi di page yang ga munculin last page, munculin simbol buat ke last page --}}
                    @if ($datas->currentPage() <= $datas->lastPage() - 3)
                        <a href="{{ $datas->url($datas->lastPage()) }}">
                            <button class="tabel-nomor">&gt;&gt;</button>
                        </a>
                    @endif
    
                    {{-- Selain di last page, munculin tombol "selanjutnya" --}}
                    @if ($datas->currentPage() != $datas->lastPage())
                        <a href="{{ $datas->nextPageUrl() }}">
                            <button id="tabel-selanjutnya">
                                Selanjutnya ->
                            </button>
                        </a>
                    @endif
    
                </div>
            </div>
        </div>

        <div class="form-peminjaman">
            <div class="peminjaman-contents">
                <h1 class="underline">Form Peminjaman</h1>
                <div>
                    <div class="display-flex-between">
                        <h3 class="teks-peminjaman">Nama</h3>
                        <h3 class="teks-peminjaman">:</h3>
                        <input class="isian-peminjaman" type="text" placeholder="Nama Peminjam" name="nama">
                    </div>
                    <div class="display-flex-between">
                        <h3 class="teks-peminjaman">NIP</h3>
                        <h3 class="teks-peminjaman">:</h3>
                        <input class="isian-peminjaman" type="text" placeholder="Nomor Induk Pegawai" name="nip">
                    </div>
                    <div class="display-flex-between">
                        <h3 class="teks-peminjaman">Email</h3>
                        <h3 class="teks-peminjaman">:</h3>
                        <input class="isian-peminjaman" type="text" placeholder="kejatijateng123@gmail.com"
                            name="email">
                    </div>
                    <div class="display-flex-between">
                        <h3 class="teks-peminjaman">No HP</h3>
                        <h3 class="teks-peminjaman">:</h3>
                        <input class="isian-peminjaman" type="text" placeholder="08xxxxxxxxxxx" name="telepon">
                    </div>
                </div>
                <div id="kirim-placement">
                    <a href="/pinjam">
                        <button type="submit" id="kirim-peminjaman">Kirim</button>
                    </a>
                </div>
            </div>
        </div>
</form>

<script>
    document.getElementById("selectform").addEventListener("reset", function (event) {
            event.preventDefault();
            window.location.href = '/peminjamanpage';
        });
</script>
@endsection