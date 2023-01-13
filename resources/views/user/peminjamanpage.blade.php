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
                        <input class="search-field" id="judul-buku" type="text" placeholder="Judul Buku">
                    </div>
                    <div class="searches">
                        <h4 class="search-text">Pengarang:</h4>
                        <input class="search-field" id="pengarang-buku" type="text" placeholder="Pengarang">
                    </div>
                    <div class="searches">
                        <h4 class="search-text">Penerbit:</h4>
                        <input class="search-field" id="penerbit-buku" type="text" placeholder="Penerbit">
                    </div>
                    <div class="searches">
                        <h4 class="search-text">Tahun Terbit:</h4>
                        <input class="search-field" id="tahun-buku" type="text" placeholder="Tahun Terbit">
                    </div>
                    <div class="searches">
                        <h4 class="search-text">Jenis Buku:</h4>
                        <input class="search-field" id="jenis-buku" type="text" placeholder="Jenis Buku">
                    </div>

                </div>
                <div class="search-buttons">
                    <button href="#" class="search-button" id="search-button-search">Cari</button>
                    <button href="#" class="search-button" id="search-button-reset"
                        onclick="document.getElementById('selectform').reset();
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
            <input class="juduls buku" type="checkbox" id="{{ $data->id }}" name="{{ $data->id }}"
                value="{{ $data->id }}">

    </div>
    @endforeach

    {{-- <div>
        <div class="display-flex-between">
            <h4 class="juduls buku">Ini judul buku pertama</h4>
            <h4 class="juduls buku">saya yang ngarang</h4>
            <h4 class="juduls buku">gaada yang nerbitin</h4>
            <h4 class="juduls buku">taun lalu</h4>
            <h4 class="juduls buku">0</h4>
            <h4 class="juduls buku">karangan</h4>
            <input class="juduls buku" type="checkbox" id="buku1" name="buku1" value="buku1">
        </div>

        <div class="display-flex-between even-buku">
            <h4 class="juduls buku">Ini judul buku kedua</h4>
            <h4 class="juduls buku">gatau yang ngarang siapa</h4>
            <h4 class="juduls buku">bukan gramedia</h4>
            <h4 class="juduls buku">taun depan</h4>
            <h4 class="juduls buku">-1</h4>
            <h4 class="juduls buku">fakta</h4>
            <input class="juduls buku" type="checkbox" id="buku1" name="buku1" value="buku1">
        </div>

        <div class="display-flex-between">
            <h4 class="juduls buku">Ini judul buku Ketiga</h4>
            <h4 class="juduls buku">gaada yang ngarang</h4>
            <h4 class="juduls buku">gromadia</h4>
            <h4 class="juduls buku">kapan kapan</h4>
            <h4 class="juduls buku">69</h4>
            <h4 class="juduls buku">fiksi</h4>
            <input class="juduls buku" type="checkbox" id="buku1" name="buku1" value="buku1">
        </div>

        <div class="display-flex-between even-buku">
            <h4 class="juduls buku">Ini judul buku keempat</h4>
            <h4 class="juduls buku">Fulan</h4>
            <h4 class="juduls buku">penerbit otodidak</h4>
            <h4 class="juduls buku">udah dari lama</h4>
            <h4 class="juduls buku">420</h4>
            <h4 class="juduls buku">novel</h4>
            <input class="juduls buku" type="checkbox" id="buku1" name="buku1" value="buku1">
        </div>

        <div class="display-flex-between">
            <h4 class="juduls buku">Ini judul buku kelima</h4>
            <h4 class="juduls buku">gaada yang ngarang</h4>
            <h4 class="juduls buku">gromadia</h4>
            <h4 class="juduls buku">kapan kapan</h4>
            <h4 class="juduls buku">69</h4>
            <h4 class="juduls buku">fiksi</h4>
            <input class="juduls buku" type="checkbox" id="buku1" name="buku1" value="buku1">
        </div>

        <div class="display-flex-between even-buku">
            <h4 class="juduls buku">Ini judul buku keenam</h4>
            <h4 class="juduls buku">Fulan</h4>
            <h4 class="juduls buku">penerbit otodidak</h4>
            <h4 class="juduls buku">udah dari lama</h4>
            <h4 class="juduls buku">420</h4>
            <h4 class="juduls buku">novel</h4>
            <input class="juduls buku" type="checkbox" id="buku1" name="buku1" value="buku1">
        </div>
        <div class="display-flex-between">
            <h4 class="juduls buku">Ini judul buku ketujuh</h4>
            <h4 class="juduls buku">gaada yang ngarang</h4>
            <h4 class="juduls buku">gromadia</h4>
            <h4 class="juduls buku">kapan kapan</h4>
            <h4 class="juduls buku">69</h4>
            <h4 class="juduls buku">fiksi</h4>
            <input class="juduls buku" type="checkbox" id="buku1" name="buku1" value="buku1">
        </div>

        <div class="display-flex-between even-buku">
            <h4 class="juduls buku">Ini judul buku kedelapan</h4>
            <h4 class="juduls buku">Fulan</h4>
            <h4 class="juduls buku">penerbit otodidak</h4>
            <h4 class="juduls buku">udah dari lama</h4>
            <h4 class="juduls buku">420</h4>
            <h4 class="juduls buku">novel</h4>
            <input class="juduls buku" type="checkbox" id="buku1" name="buku1" value="buku1">
        </div>
        <div class="display-flex-between">
            <h4 class="juduls buku">Ini judul buku kesembilan</h4>
            <h4 class="juduls buku">gaada yang ngarang</h4>
            <h4 class="juduls buku">gromadia</h4>
            <h4 class="juduls buku">kapan kapan</h4>
            <h4 class="juduls buku">69</h4>
            <h4 class="juduls buku">fiksi</h4>
            <input class="juduls buku" type="checkbox" id="buku1" name="buku1" value="buku1">
        </div>

        <div class="display-flex-between even-buku">
            <h4 class="juduls buku">Ini judul buku kesepuluh</h4>
            <h4 class="juduls buku">Fulan</h4>
            <h4 class="juduls buku">penerbit otodidak</h4>
            <h4 class="juduls buku">udah dari lama</h4>
            <h4 class="juduls buku">420</h4>
            <h4 class="juduls buku">novel</h4>
            <input class="juduls buku" type="checkbox" id="buku1" name="buku1" value="buku1">
        </div> 
    </div> --}}
    <hr color="black" width="100%" size="1px">
    <div class="bottom-buttons">
        <div></div>
        <div id="bottom-right">
            <p>Halaman {{ $datas->currentPage() }}/{{ $datas->lastPage() }}</p>
            @if ($datas->currentPage() != 1)
                <style>
                    #bottom-right {
                        width: 63%;
                    }
                </style>
                <a href="{{ $datas->previousPageUrl() }}">
                    <button id="tabel-sebelumnya">
                        <- Sebelumnya </button>
                </a>
            @endif

            @if ($datas->currentPage() >= 4)
                <a href="{{ $datas->url(1) }}">
                    <button class="tabel-nomor">
                        &lt;&lt;
                    </button>
                </a>
            @endif
            @if ($datas->currentPage() == $datas->lastPage())
                <a href="{{ $datas->url($datas->currentPage() - 5) }}">
                    <button class="tabel-nomor">{{ $datas->currentPage() - 2 }}</button>
                </a>
                <a href="{{ $datas->url($datas->currentPage() - 4) }}">
                    <button class="tabel-nomor">{{ $datas->currentPage() - 1 }}</button>
                </a>
            @elseif ($datas->currentPage() == $datas->lastPage() - 1)
                <a href="{{ $datas->url($datas->currentPage() - 4) }}">
                    <button class="tabel-nomor">{{ $datas->currentPage() - 1 }}</button>
                </a>
            @endif

            @if ($datas->currentPage() >= 3 || $datas->currentPage() == $datas->lastPage())
                <a href="{{ $datas->url($datas->currentPage() - 2) }}">
                    <button class="tabel-nomor">{{ $datas->currentPage() - 2 }}</button>
                </a>
                <a href="{{ $datas->url($datas->currentPage() - 1) }}">
                    <button class="tabel-nomor">{{ $datas->currentPage() - 1 }}</button>
                </a>
            @elseif ($datas->currentPage() == 2 || $datas->currentPage() == $datas->lastPage() - 1)
                <a href="{{ $datas->url($datas->currentPage() - 1) }}">
                    <button class="tabel-nomor">{{ $datas->currentPage() - 1 }}</button>
                </a>
            @endif

            <a href="{{ $datas->url($datas->currentPage()) }}">
                <button class="tabel-nomor" id="nomor-terpilih">{{ $datas->currentPage() }}</button>
            </a>

            @if ($datas->currentPage() == $datas->lastPage() - 1)
                <a href="{{ $datas->url($datas->currentPage() + 1) }}">
                    <button class="tabel-nomor">{{ $datas->currentPage() + 1 }}</button>
                </a>
            @elseif ($datas->currentPage() != $datas->lastPage())
                <a href="{{ $datas->url($datas->currentPage() + 1) }}">
                    <button class="tabel-nomor">{{ $datas->currentPage() + 1 }}</button>
                </a>
                <a href="{{ $datas->url($datas->currentPage() + 2) }}">
                    <button class="tabel-nomor">{{ $datas->currentPage() + 2 }}</button>
                </a>
            @endif

            @if ($datas->currentPage() == 1)
                <a href="{{ $datas->url($datas->currentPage() + 3) }}">
                    <button class="tabel-nomor">{{ $datas->currentPage() + 3 }}</button>
                </a>
                <a href="{{ $datas->url($datas->currentPage() + 4) }}">
                    <button class="tabel-nomor">{{ $datas->currentPage() + 4 }}</button>
                </a>
            @elseif ($datas->currentPage() == 2)
                <a href="{{ $datas->url($datas->currentPage() + 3) }}">
                    <button class="tabel-nomor">{{ $datas->currentPage() + 3 }}</button>
                </a>
            @endif
            @if ($datas->currentPage() <= $datas->lastPage() - 3)
                <a href="{{ $datas->url($datas->lastPage()) }}">
                    <button class="tabel-nomor">&gt;&gt;</button>
                </a>
            @endif

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
                    <input class="isian-peminjaman" type="text" placeholder="Nama Peminjam">
                </div>
                <div class="display-flex-between">
                    <h3 class="teks-peminjaman">NIP</h3>
                    <h3 class="teks-peminjaman">:</h3>
                    <input class="isian-peminjaman" type="text" placeholder="Nomor Induk Pegawai">
                </div>
                <div class="display-flex-between">
                    <h3 class="teks-peminjaman">Email</h3>
                    <h3 class="teks-peminjaman">:</h3>
                    <input class="isian-peminjaman" type="text" placeholder="kejatijateng123@gmail.com">
                </div>
                <div class="display-flex-between">
                    <h3 class="teks-peminjaman">No HP</h3>
                    <h3 class="teks-peminjaman">:</h3>
                    <input class="isian-peminjaman" type="text" placeholder="08xxxxxxxxxxx">
                </div>
            </div>
            <div id="kirim-placement">
                <a href='/'>
                    <button id="kirim-peminjaman">Kirim</button>
                </a>

            </div>
        </div>


    </div>
@endsection
