@extends('user.navtop')
@section('content')
<div>
    <div>
        <h2 class="koleksi-buku-text">KOLEKSI <span class="teks-ungu">BUKU</span></h2>
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
                    <button href="#" class="search-button" id="search-button-reset" onclick="document.getElementById('selectform').reset();
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
            <h4 class="juduls ">Jumlah <span class="material-symbols-outlined">
                    unfold_more
                </span></h4>
            <h4 class="juduls ">Jenis Buku <span class="material-symbols-outlined">
                    unfold_more
                </span></h4>

        </div>
        <hr color="black" width="100%" size="1px">
        <div>
            <div class="display-flex-between">
                <h4 class="juduls buku">Ini judul buku pertama</h4>
                <h4 class="juduls buku">saya yang ngarang</h4>
                <h4 class="juduls buku">gaada yang nerbitin</h4>
                <h4 class="juduls buku">taun lalu</h4>
                <h4 class="juduls buku">0</h4>
                <h4 class="juduls buku">karangan</h4>
            </div>

            <div class="display-flex-between even-buku">
                <h4 class="juduls buku">Ini judul buku kedua</h4>
                <h4 class="juduls buku">gatau yang ngarang siapa</h4>
                <h4 class="juduls buku">bukan gramedia</h4>
                <h4 class="juduls buku">taun depan</h4>
                <h4 class="juduls buku">-1</h4>
                <h4 class="juduls buku">fakta</h4>
            </div>

            <div class="display-flex-between">
                <h4 class="juduls buku">Ini judul buku Ketiga</h4>
                <h4 class="juduls buku">gaada yang ngarang</h4>
                <h4 class="juduls buku">gromadia</h4>
                <h4 class="juduls buku">kapan kapan</h4>
                <h4 class="juduls buku">69</h4>
                <h4 class="juduls buku">fiksi</h4>
            </div>

            <div class="display-flex-between even-buku">
                <h4 class="juduls buku">Ini judul buku keempat</h4>
                <h4 class="juduls buku">Fulan</h4>
                <h4 class="juduls buku">penerbit otodidak</h4>
                <h4 class="juduls buku">udah dari lama</h4>
                <h4 class="juduls buku">420</h4>
                <h4 class="juduls buku">novel</h4>
            </div>

            <div class="display-flex-between">
                <h4 class="juduls buku">Ini judul buku kelima</h4>
                <h4 class="juduls buku">gaada yang ngarang</h4>
                <h4 class="juduls buku">gromadia</h4>
                <h4 class="juduls buku">kapan kapan</h4>
                <h4 class="juduls buku">69</h4>
                <h4 class="juduls buku">fiksi</h4>
            </div>

            <div class="display-flex-between even-buku">
                <h4 class="juduls buku">Ini judul buku keenam</h4>
                <h4 class="juduls buku">Fulan</h4>
                <h4 class="juduls buku">penerbit otodidak</h4>
                <h4 class="juduls buku">udah dari lama</h4>
                <h4 class="juduls buku">420</h4>
                <h4 class="juduls buku">novel</h4>
            </div>
            <div class="display-flex-between">
                <h4 class="juduls buku">Ini judul buku ketujuh</h4>
                <h4 class="juduls buku">gaada yang ngarang</h4>
                <h4 class="juduls buku">gromadia</h4>
                <h4 class="juduls buku">kapan kapan</h4>
                <h4 class="juduls buku">69</h4>
                <h4 class="juduls buku">fiksi</h4>
            </div>

            <div class="display-flex-between even-buku">
                <h4 class="juduls buku">Ini judul buku kedelapan</h4>
                <h4 class="juduls buku">Fulan</h4>
                <h4 class="juduls buku">penerbit otodidak</h4>
                <h4 class="juduls buku">udah dari lama</h4>
                <h4 class="juduls buku">420</h4>
                <h4 class="juduls buku">novel</h4>
            </div>
            <div class="display-flex-between">
                <h4 class="juduls buku">Ini judul buku kesembilan</h4>
                <h4 class="juduls buku">gaada yang ngarang</h4>
                <h4 class="juduls buku">gromadia</h4>
                <h4 class="juduls buku">kapan kapan</h4>
                <h4 class="juduls buku">69</h4>
                <h4 class="juduls buku">fiksi</h4>
            </div>

            <div class="display-flex-between even-buku">
                <h4 class="juduls buku">Ini judul buku kesepuluh</h4>
                <h4 class="juduls buku">Fulan</h4>
                <h4 class="juduls buku">penerbit otodidak</h4>
                <h4 class="juduls buku">udah dari lama</h4>
                <h4 class="juduls buku">420</h4>
                <h4 class="juduls buku">novel</h4>
            </div>


        </div>
        <hr color="black" width="100%" size="1px">
        <div class="bottom-buttons">
            <a href="/peminjamanpage">
                <button id="peminjaman-buku">Peminjaman Buku</button>
            </a>

            <div id="bottom-right">
                <p>Menampilkan 1/403</p>
                <!-- <button>&lt;- Sebelumnya</button> -->
                <button class="tabel-nomor" id="nomor-satu">1</button>
                <button class="tabel-nomor">2</button>
                <button class="tabel-nomor">3</button>
                <button class="tabel-nomor">4</button>
                <button class="tabel-nomor">5</button>
                . . .
                <button class="tabel-nomor">403</button>
                <button id="tabel-selanjutnya">Selanjutnya -></button>

            </div>
        </div>


    </div>
</div>
@endsection