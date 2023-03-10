@extends('user.navtop')
@section('content')
    <div>
        <h2 class="koleksi-buku-text">PEMINJAMAN <span class="teks-ungu">BUKU</span></h2>
        <div class="text-center">
            <h3 class="text-pencarian">PENCARIAN</h3>
            <form id="selectform" action="{{ route('peminjamanpage') }}" method="GET">
                <div class="search-fields" id="selectform">
                    <div class="searches">
                        <h5 class="search-text">Judul Buku:</h5>
                        <input class="search-field" id="judul-buku" name="judul_buku" type="text"
                            value="{{ request('judul_buku') }}" placeholder="Judul Buku">
                    </div>
                    <div class="searches">
                        <h5 class="search-text">Pengarang:</h5>
                        <input class="search-field" id="pengarang-buku" name="nama_pengarang" type="text"
                            value="{{ request('nama_pengarang') }}" placeholder="Pengarang">
                    </div>
                    <div class="searches">
                        <h5 class="search-text">Penerbit:</h5>
                        <input class="search-field" id="penerbit-buku" name="penerbit" type="text"
                            value="{{ request('penerbit') }}" placeholder="Penerbit">
                    </div>
                    <div class="searches">
                        <h5 class="search-text">Tahun Terbit:</h5>
                        <input class="search-field" id="tahun-buku" name="tahun_terbit" type="text"
                            value="{{ request('tahun_terbit') }}" placeholder="Tahun Terbit">
                    </div>
                    <div class="searches">
                        <h5 class="search-text">Jenis Buku:</h5>
                        <input class="search-field" id="jenis-buku" name="jenis_buku" type="text"
                            value="{{ request('jenis_buku') }}" placeholder="Jenis Buku">
                    </div>

                </div>
                <div class="search-buttons">
                    <button href="#" class="search-button" id="search-button-search" type="submit">Cari</button>
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
        <h3 class="daftar-buku">Daftar Buku</h3>
        <div class="display-flex-between ">
            <h3></h3>
            {{-- <h6 class="menampilkan-buku">Menampilkan
            <span class="jumlah-buku"><button class="jumlah-buku-dropbtn">{{ $datas->count() }}</button>
                <span class="jumlah-buku-contents">
                    <a class="jumlah-buku-content" href="#">10</a>
                    <a class="jumlah-buku-content" href="#">20</a>
                    <a class="jumlah-buku-content" href="#">50</a>
                    <a class="jumlah-buku-content" href="#">100</a>
                </span></span> data --}}
            <form action="{{ url('/peminjamanpage') }}" method="get">
                <label for="pagination">Menampilkan </label>
                <select name="pagination" id="pagination" onchange="this.form.submit()">
                    <option selected>{{ $datas->count() }}</option>
                    <option class="jumlah-buku-content" value="10">10</option>
                    <option class="jumlah-buku-content" value="20">20</option>
                    <option class="jumlah-buku-content" value="50">50</option>
                    <option class="jumlah-buku-content" value="100">100</option>
                </select>
                <label for="pagination">data</label>
            </form>
            </h6>
        </div>
        <div class="display-flex-between">
            <h5 class="juduls " id="no_buku">No
                {{-- <span class="material-symbols-outlined">
                unfold_more
            </span> --}}
            </h5>
            <h5 class="juduls ">Judul Buku
                {{-- <span class="material-symbols-outlined">
                unfold_more
            </span> --}}
            </h5>
            <h5 class="juduls ">No Klasifikasi
                {{-- <span class="material-symbols-outlined">
                unfold_more
            </span> --}}
            </h5>
            <h5 class="juduls ">Pengarang
                {{-- <span class="material-symbols-outlined">
                unfold_more
            </span> --}}
            </h5>
            <h5 class="juduls ">Penerbit
                {{-- <span class="material-symbols-outlined">
                unfold_more
            </span> --}}
            </h5>
            <h5 class="juduls ">Tahun Terbit
                {{-- <span class="material-symbols-outlined">
                unfold_more
            </span> --}}
            </h5>
            <h5 class="juduls " id="no_buku">Jumlah
                {{-- <span class="material-symbols-outlined">
                unfold_more
            </span> --}}
            </h5>
            <h5 class="juduls ">Jenis Buku
                {{-- <span class="material-symbols-outlined">
                unfold_more
            </span> --}}
            </h5>
            <h5 class="juduls ">Pinjam
                {{-- <span class="material-symbols-outlined">
                check_box
            </span> --}}
            </h5>

        </div>
        <hr color="black" width="100%" size="1px">

        @php
            $nomor = $datas->currentPage() * $datas->count() - $datas->count() + 1;
        @endphp

        @foreach ($datas as $data)
            @if ($nomor % 2 == 1)
                <div class="display-flex-between">
                @else
                    <div class="display-flex-between even-buku">
            @endif

            <h5 class="juduls buku" id="no_buku">{{ $nomor++ }}</h5>
            <h5 class="juduls buku">{{ $data->judul_buku }}</h5>
            <h5 class="juduls buku">{{ $data->no_klasifikasi }}</h5>
            <h5 class="juduls buku">{{ $data->nama_pengarang }}</h5>
            <h5 class="juduls buku text-center">{{ $data->penerbit }}</h5>
            <h5 class="juduls buku text-center">{{ $data->tahun_terbit }}</h5>
            <h5 class="juduls buku" id="no_buku">{{ $data->jumlah }}</h5>
            <h5 class="juduls buku text-center">{{ $data->jenis_buku }}</h5>
            <input class="juduls buku" type="checkbox" id="{{ $data->id }}" name="buku_id[]"
                value="{{ $data->id }}" onclick="saveToLocalStorage({{ $data->id }})" {{-- @if (old('book_id') && in_array($data->id, old('book_id'))) checked @endif --}}>

    </div>
    @endforeach

    <hr color="black" width="100%" size="1px">
    <div class="bottom-buttons">
        {{-- <a> --}}
        <button class="tabel-kembali" id="btn-delete-storage" type="button" onclick="bebasku()">Reset Buku</button>
        {{-- </a> --}}
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
                    <button id="tabel-sebelumnya" type="button">
                        ???? Sebelumnya </button>
                </a>
            @endif

            {{-- kalo di page yang ga nampilin page pertama, tampilin simbol untuk bisa akses page pertama --}}
            @if ($datas->currentPage() >= 4)
                <a href="{{ $datas->url(1) }}">
                    <button class="tabel-nomor" type="button">
                        &lt;&lt;
                    </button>
                </a>
            @endif

            {{-- kalo lagi di last page, tampilin prev page sampe -4 --}}
            @if ($datas->currentPage() == $datas->lastPage() && $datas->lastPage() >= 5)
                <a href="{{ $datas->url($datas->currentPage() - 4) }}">
                    <button class="tabel-nomor" type="button">{{ $datas->currentPage() - 4 }}</button>
                </a>
                <a href="{{ $datas->url($datas->currentPage() - 3) }}">
                    <button class="tabel-nomor" type="button">{{ $datas->currentPage() - 3 }}</button>
                </a>
                {{-- Sama kaya sebelumnya tapi -1 --}}
            @elseif ($datas->currentPage() == $datas->lastPage() - 1 && $datas->lastPage() >= 4)
                <a href="{{ $datas->url($datas->currentPage() - 3) }}">
                    <button class="tabel-nomor" type="button">{{ $datas->currentPage() - 3 }}</button>
                </a>
            @endif

            {{-- Tampilin prev page -2 kalo lagi di page lebih dari 3 --}}
            @if ($datas->currentPage() >= 3 || ($datas->currentPage() == $datas->lastPage() && $datas->lastPage() >= 3))
                <a href="{{ $datas->url($datas->currentPage() - 2) }}">
                    <button class="tabel-nomor" type="button">{{ $datas->currentPage() - 2 }}</button>
                </a>
                <a href="{{ $datas->url($datas->currentPage() - 1) }}">
                    <button class="tabel-nomor" type="button">{{ $datas->currentPage() - 1 }}</button>
                </a>
                {{-- Kalo di page 2, tampilin prev pagenya 1 aja --}}
            @elseif ($datas->currentPage() == 2 && $datas->lastPage() >= 2)
                <a href="{{ $datas->url($datas->currentPage() - 1) }}">
                    <button class="tabel-nomor" type="button">{{ $datas->currentPage() - 1 }}</button>
                </a>
            @endif

            {{-- Tampilin page sekarang --}}
            @if ($datas->lastPage() != 1)
                <a href="{{ $datas->url($datas->currentPage()) }}">
                    <button class="tabel-nomor" type="button" id="nomor-terpilih">{{ $datas->currentPage() }}</button>
                </a>
            @endif

            {{-- Kalo next page cuman ada 1, munculinnya 1 aja --}}
            @if ($datas->currentPage() == $datas->lastPage() - 1 && $datas->lastPage() >= 2)
                <a href="{{ $datas->url($datas->currentPage() + 1) }}">
                    <button class="tabel-nomor" type="button">{{ $datas->currentPage() + 1 }}</button>
                </a>
                {{-- Sisanya normal aja nampilin 2 next page --}}
            @elseif ($datas->currentPage() != $datas->lastPage() && $datas->lastPage() >= 3)
                <a href="{{ $datas->url($datas->currentPage() + 1) }}">
                    <button class="tabel-nomor" type="button">{{ $datas->currentPage() + 1 }}</button>
                </a>
                <a href="{{ $datas->url($datas->currentPage() + 2) }}">
                    <button class="tabel-nomor" type="button">{{ $datas->currentPage() + 2 }}</button>
                </a>
            @endif

            {{-- Kalo page 1, tampilin next page sampe +4 --}}
            @if ($datas->currentPage() == 1 && $datas->lastPage() >= 4)
                <a href="{{ $datas->url($datas->currentPage() + 3) }}">
                    <button class="tabel-nomor" type="button">{{ $datas->currentPage() + 3 }}</button>
                </a>
                <a href="{{ $datas->url($datas->currentPage() + 4) }}">
                    <button class="tabel-nomor" type="button">{{ $datas->currentPage() + 4 }}</button>
                </a>
                {{-- Kalo page 2, tampilin next page sampe +3 --}}
            @elseif ($datas->currentPage() == 2 && $datas->lastPage() >= 3)
                <a href="{{ $datas->url($datas->currentPage() + 3) }}">
                    <button class="tabel-nomor" type="button">{{ $datas->currentPage() + 3 }}</button>
                </a>
            @endif

            {{-- Kalo lagi di page yang ga munculin last page, munculin simbol buat ke last page --}}
            @if ($datas->currentPage() <= $datas->lastPage() - 3)
                <a href="{{ $datas->url($datas->lastPage()) }}">
                    <button class="tabel-nomor" type="button">&gt;&gt;</button>
                </a>
            @endif

            {{-- Selain di last page, munculin tombol "selanjutnya" --}}
            @if ($datas->currentPage() != $datas->lastPage())
                <a href="{{ $datas->nextPageUrl() }}">
                    <button id="tabel-selanjutnya" type="button">
                        Selanjutnya ????
                    </button>
                </a>
            @endif

        </div>
    </div>
    </div>
    <form action="{{ route('store_peminjaman') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-peminjaman">
            <div class="peminjaman-contents">
                <h2>Form <span class="teks-ungu">Peminjaman</span></h2>
                <div>
                    <div class="display-flex-between">
                        <h5 class="teks-peminjaman">Nama</h5>
                        <h5 class="teks-peminjaman">:</h5>
                        <input class="isian-peminjaman" type="text" placeholder="Nama Peminjam" name="nama">
                    </div>
                    <div class="display-flex-between">
                        <h5 class="teks-peminjaman">NIP</h5>
                        <h5 class="teks-peminjaman">:</h5>
                        <input class="isian-peminjaman" type="text" placeholder="Nomor Induk Pegawai" name="nip">
                    </div>
                    <div class="display-flex-between">
                        <h5 class="teks-peminjaman">Email</h5>
                        <h5 class="teks-peminjaman">:</h5>
                        <input class="isian-peminjaman" type="text" placeholder="kejatijateng123@gmail.com"
                            name="email">
                    </div>
                    <div class="display-flex-between">
                        <h5 class="teks-peminjaman">No HP</h5>
                        <h5 class="teks-peminjaman">:</h5>
                        <input class="isian-peminjaman" type="text" placeholder="08xxxxxxxxxxx" name="telepon">
                    </div>
                    <input id="idBuku" type="text" name="buku_id" hidden>
                </div>
                <div id=" kirim-placement">
                    <a href="/pinjam">
                        <button type="submit" id="kirim-peminjaman">Kirim</button>
                    </a>
                    {{-- <button type="button" id="btn-delete-storage" class="reset-peminjaman">Reset</button> --}}
                </div>
            </div>
        </div>
    </form>

    <script>
        document.getElementById("selectform").addEventListener("reset", function(event) {
            event.preventDefault();
            window.location.href = '/peminjamanpage';
        });
    </script>

    <script>
        function saveToLocalStorage(id) {
            let selectedIds = JSON.parse(localStorage.getItem('selected_ids')) || [];
            if (event.target.checked) {
                selectedIds.push(id);
            } else {
                selectedIds = selectedIds.filter(selectedId => selectedId !== id);
            }
            localStorage.setItem('selected_ids', JSON.stringify(selectedIds));
            location.reload();
        }

        let selectedIds = JSON.parse(localStorage.getItem('selected_ids'));
        let input = document.getElementById("idBuku");
        if (selectedIds) {
            selectedIds.forEach(id => {
                input.value += id + ' ';
                let element = document.querySelector(`input[value="${id}"]`);
                if (element) {
                    element.checked = true;
                }
            });
        }
    </script>

    <script>
        function bebasku() {
            localStorage.removeItem("selected_ids");
            location.reload();
        };

        // document.getElementById("btn-delete-storage").addEventListener("click", function(){
        //     localStorage.removeItem("selected_ids");
        //     location.reload();
        // });
    </script>
    {{-- <script>
        window.addEventListener("unload", function() {
        localStorage.removeItem("selected_ids");
    });
    </script> --}}

    {{--
    <script>
        // document.querySelector(`input[value="${id}"]`).checked = "true";
    // input.value += id + ' ';

    // document.querySelector(`input[value="${id}"]`);
    // .setAttribute("name", "buku_id[]");

    // if (selectedIds) {
    // selectedIds.forEach(id => {
    // let element = document.querySelector(input[value="${id}"]);
    // if(element) {
    // element.checked = true;
    // }
    // });
    // }
    // location.reload();

    // let selected = JSON.parse(localStorage.getItem('selected_ids'));
    // let input = document.getElementById("idBuku");

    // let datas = localStorage.getItem('selected_ids');
    // document.getElementById("inputField").value = datas;

        let selected = JSON.parse(localStorage.getItem('selected_ids'));
        let input = document.getElementById("idBuku");

        if (selected) {
            selectedIds.forEach(id => {
                input.value += id + ' ';
            });
        }
    </script> --}}
@endsection
