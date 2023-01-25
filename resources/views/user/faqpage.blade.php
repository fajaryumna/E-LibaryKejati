@extends('user.navtop')
@section('content')

    <h2 class="koleksi-buku-text">
        FREQUENTLY
        <span class="teks-ungu">ASKED QUESTIONS</span>
    </h2>

    <div id="pertanyaans">
        {{-- Style for accordion --}}
        <style>
            /* Style the buttons that are used to open and close the accordion panel */
            .accordion {
                background-color: #d9d9d9;
                cursor: pointer;
                padding: 18px;
                width: 100%;
                text-align: left;
                border: none;
                outline: none;
                transition: 0.4s;
                font-size: large;
                font-weight: 900;
            }

            /* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
            .active,
            .accordion:hover {
                background-color: #ccc;
            }

            /* Style the accordion panel. Note: hidden by default */
            .panel {
                padding: 16px 7%;
                background-color: #d9d9d9;
                display: none;
                overflow: hidden;
            }

            .accordion-item{
                margin-bottom: 20px;
            }
        </style>
        {{-- Acccordion --}}
        <div class="accordion-item">
            <button class="accordion">PEMINJAMAN</button>
            <div class="panel">
                <p>Alur Peminjaman
                    1. Peminjaman dapat dilakukan dengan mengisi form peminjaman pada tab “PEMINJAMAN”
                    2. Setelah selesai mengisi form, klik “kirim”
                    3. Akan muncul invoice yang harus kita tunjukkan pada petugas perpustakaan kejati.
                    Catatan:
                    Jumlah buku yang dapat dipinjam maksimal sebanyak 10 (sepuluh) buku.</p>
            </div>
        </div>

        <div class="accordion-item">
            <button class="accordion">MASA PEMINJAMAN</button>
            <div class="panel">
                <p>Lama peminjaman buku berlaku 14 (empat belas) hari. Apabila peminjam masih memerlukan koleksi tersebut,
                    dapat
                    memperpanjang masa peminjaman untuk 7 (tujuh) hari berkutnya dengan menghubungi petugas perpustakaan
                    kejati.
                </p>
            </div>
        </div>

        <div class="accordion-item">
            <button class="accordion">PENGEMBALIAN PEMINJAMAN BUKU</button>
            <div class="panel">
                <p>Alur Pengembalian
                    1. Pengembalian hanya bisa dilakukan secara offline dengan mendatangi langsung perpustakaan kejati.
                    2. Pengembalian buku pada petugas piket perpustakaan kejati.
                    3. Harap mengecek kelengkapan buku yang hendak dikembalikan.
                    Catatan:
                    Buku yang hilang, rusak atau terlambat dikembalikan akan dikenai denda sesuai aturan yang berlaku..</p>
            </div>
        </div>

        <div class="accordion-item">
            <button class="accordion">DENDA KETERLAMBATAN</button>
            <div class="panel">
                <p>Apabila peminjam terlambat mengembalikan buku, maka akan dikenai denda yang ditentukan oleh
                    atasan langsung perpustakaan atau sekurang-kurangnya pejabat eselon III.

                    Peminjam yang belum mengembalikan pinjamannya tidak diperkenankan untuk melakukan peminjaman lagi,
                    sampai
                    dikembalikannya koleksi tersebut dan denda harus dibayar lunas.</p>
            </div>
        </div>

        <div class="accordion-item">
            <button class="accordion">BUKU HILANG</button>
            <div class="panel">
                <p>Apabila peminjam menghilangkan buku yang dipinjam, maka harus mengembalikan atau mengganti dengan buku
                    yang
                    sama.</p>
            </div>
        </div>

        {{-- Script for accordion --}}
        <script>
            var acc = document.getElementsByClassName("accordion");
            var i;

            for (i = 0; i < acc.length; i++) {
                acc[i].addEventListener("click", function() {
                    /* Toggle between adding and removing the "active" class,
                    to highlight the button that controls the panel */
                    this.classList.toggle("active");

                    /* Toggle between hiding and showing the active panel */
                    var panel = this.nextElementSibling;
                    if (panel.style.display === "block") {
                        panel.style.display = "none";
                    } else {
                        panel.style.display = "block";
                    }
                });
            }
        </script>
        {{-- Accordion done --}}


    </div>
@endsection
