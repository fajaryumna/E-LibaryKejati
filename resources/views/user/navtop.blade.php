<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Perpustakaan Kejati Jawa Tengah</title>

    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    {{-- @if (Request::path() == '/mainpage') --}}
    @if (Route::current()->getName() == 'mainpage')
    <style>
        .top-page {
            margin: 0;
            padding: 0 0 500px 0;
            background-image: url(images/FotoDepanKejatiJateng.jpg);
            /* background-image: url("https://scontent-sin6-2.xx.fbcdn.net/v/t39.30808-6/243184779_262108162585008_5482248783908827866_n.jpg?stp=dst-jpg_s960x960&_nc_cat=108&ccb=1-7&_nc_sid=e3f864&_nc_ohc=DlmOUTmLABAAX-ppGnD&_nc_ht=scontent-sin6-2.xx&oh=00_AfBThsdQpdS-pnw2C6Vf89FYYQ70ttKKCM0SCLZzRIxG3A&oe=63B6F437"); */
            background-size: cover;
        }
    </style>
    @else
    <style>
        .top-page {
            margin: 0;
            box-shadow: 0 0 50px -20px black;
        }
    </style>
    @endif

    <style>
        /* Tag Classes */
        body {
            margin: 0;
            background-color: #fffbf5;
        }


        body,
        input,
        button,
        th,
        td,
        p {
            font-family: 'Poppins';
        }

        button {
            cursor: pointer;
        }

        a {
            color: #f6f6f6;
        }

        .text-shadow {
            margin: inherit;
            color: black;
            background-color: #f6f6f699;
            padding: 10px 3%;
        }

        .top-right-contents {
            width: 35%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: large;
        }

        .top-right-content {
            margin: auto 10px auto 10%;
            color: black;
            text-decoration: none;
            font-size: medium;
        }


        .koleksi-buku-text {
            font-size: xx-large;
            font-weight: 900;
            text-align: center;
            margin-top: 50px
        }

        .text-pencarian {
            margin: 10px 10%;
            justify-content: start;
            text-align: start;
        }

        .search-fields {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: auto 10%;
        }

        .searches {
            width: 15%;
        }

        .search-text {
            text-align: start;
            margin: 5% 0;
            font-weight: 500
        }

        .search-field {
            width: 100%;
            height: 30px;
            border: 1px solid black;
            border-radius: 10px;
            box-shadow: 4px 4px 6px rgba(0, 0, 0, 0.25);
            padding-left: 10px;
        }

        .search-buttons {
            display: flex;
            justify-content: start;
            align-items: center;
            margin: 30px 10%;
        }

        .search-button {
            /* padding: 7px 25px; */
            width: 80px;
            height: 30px;
            margin: auto 15px auto 0;
            border-radius: 10px;
            border: none;
            font-size: small;
            /* font-weight: bold; */
        }

        #search-button-search {
            background-color: #d98e04;
            color: #f6f6f6;
        }

        #search-button-search:hover {
            background-color: rgb(121, 78, 0);
            color: #f6f6f6;
        }

        #search-button-reset {
            background-color: #d9d9d9;
        }

        .jumlah-buku {
            position: relative;
            display: inline-block;
        }

        .jumlah-buku-dropbtn {
            background-color: #d9d9d9;
            border: none;
        }

        .jumlah-buku-contents {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }


        .jumlah-buku-contents .jumlah-buku-content {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }


        .jumlah-buku-contents .jumlah-buku-content:hover {
            background-color: #ddd;
        }


        .jumlah-buku:hover .jumlah-buku-contents {
            display: block;
        }

        .jumlah-buku:hover .jumlah-buku-dropbtn {
            background-color: #067321;
        }

        .tabel-buku {
            margin: 40px 10% 0 10%;
        }

        h3.daftar-buku,
        h6.menampilkan-buku {
            margin: 0;
        }

        h6.menampilkan-buku {
            font-weight: lighter
        }

        .juduls {
            margin: 15px 5px;
            width: 40%;
            text-align: center
        }

        #no_buku {
            width: 23%;
            text-align: center
        }

        .filter-button {
            background-color: transparent;
            border: none;
        }

        .buku {
            font-weight: lighter;
            text-align: start;
        }

        .even-buku {
            background-color: rgb(221, 221, 221);
        }

        .bottom-buttons {
            margin: 20px auto 100px auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: small;
        }

        /* Peminjaman buku */
        #peminjaman-buku {
            background-color: #94008e;
            padding: 7px 30px;
            color: #f6f6f6;
            border: none;
            border-radius: 10px;
        }

        input.juduls {
            /* Double-sized Checkboxes */
            -ms-transform: scale(1.5);
            /* IE */
            -moz-transform: scale(1.5);
            /* FF */
            -webkit-transform: scale(1.5);
            /* Safari and Chrome */
            -o-transform: scale(1.5);
            /* Opera */
            transform: scale(1.5);
            padding: 1.50px;
        }

        #bottom-right {
            display: flex;
            justify-content: space-around;
            align-items: center;
            width: fit-content;
        }

        #bottom-right a,
        #bottom-right p {
            margin: 5px 5px;
        }

        .tabel-nomor {
            border: none;
            background-color: transparent;
            font-weight: bold;
        }

        #nomor-terpilih {
            background-color: #d9d9d9;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .tabel-kembali {
            background-color: #d9d9d9;
            padding: 7px 60px;
            color: black;
            border: none;
            border-radius: 10px;
        }

        #tabel-selanjutnya {
            background-color: #d98e04;
            color: #f6f6f6;
            border-radius: 10px;
            border: none;
            padding: 7px 15px;
        }

        #tabel-sebelumnya {
            background-color: #d9d9d9;
            color: default;
            border-radius: 10px;
            border: none;
            padding: 7px 15px;
        }

        /* Form Peminjaman */
        .form-peminjaman {
            background-color: #f6f6f6;
            box-shadow: 0px 1px 10px black;
        }

        .peminjaman-contents {
            margin: auto 15%;
            padding: 10px 0;
        }

        .teks-peminjaman {
            width: 7%;
            font-weight: lighter;
        }

        .isian-peminjaman {
            width: 100%;
            height: 25px;
            border-radius: 10px;
            padding: 10px 20px;
        }

        #kirim-placement {
            display: flex;
            justify-content: end;
            align-items: center;
        }

        #kirim-peminjaman {
            border: none;
            margin: 20px 0 30px auto;
            border-radius: 30px;
            background-color: #d98e04;
            color: #f6f6f6;
            font-size: large;
            padding: 7px 25px;
        }

        .reset-peminjaman {
            border: none;
            margin: 20px 0 30px auto;
            border-radius: 30px;
            background-color: #d9d9d9;
            /* color: #f6f6f6; */
            font-size: large;
            padding: 7px 25px;
        }


        /* FAQ */
        #pertanyaans {
            margin: 100px 15%;
        }

        .pertanyaans {
            width: 70%;
            border: none;
            height: 60px;
            margin: 25px 15%;
            padding: 0px 30px;
            background-color: #d9d9d9;
            font-weight: bolder;
        }


        /* Footer stuffs */
        footer {
            padding: 5px 0;
            background-color: #067322;
            color: #f6f6f6;
        }

        .footer-content {
            margin: 10px 5%;
        }

        .top-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        #judul-footer {
            text-align: center;
            width: 100%;
            margin: auto auto;
        }

        .bottom-footer {
            display: flex;
            justify-content: space-between;
        }

        .bottom-footer-content {
            width: 40%;
        }

        .bottom-footer-upper {
            margin: 20px 0;
        }

        .bottom-footer-downer {
            margin-bottom: 35px;
        }

        .footer-kontak {
            margin: auto;
        }

        .footer-kontak-content {
            font-weight: lighter;
            margin: 0 auto 20px auto;
        }

        .footer-sosmed-logo {

            border-radius: 50%;
            width: 45px;
            height: 45px;
            /* border: none; */
            margin: auto 2px;
        }

        /* Utility Classes */
        .teks-ungu {
            color: #94008e;
        }

        .text-center {
            text-align: center;
        }

        .display-flex-center {
            display: flex;
            justify-content: center;
            margin: 0 20%;
        }

        .underline {
            text-decoration: underline;
        }

        .border-checker {
            border: 2px dotted red;
        }

        .material-symbols-outlined {
            font-variation-settings:
                'FILL'0,
                'wght'400,
                'GRAD'0,
                'opsz'24
        }

        .no-margin {
            margin: 0px;
        }

        .display-flex-between {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>


</head>

<body class="antialiased">
    <div class="no-margin">
        <div class="top-page">
            <div class="text-shadow display-flex-between">
                <div>
                    <a href='/mainpage'>
                        <img src="images/logo-kejati.png" width="35%">
                    </a>
                </div>
                <div class="top-right-contents">
                    <a class="top-right-content" href="/mainpage"
                        style="{{ Route::current()->getName() == 'mainpage' ? 'font-weight:bold;' : '' }}">Beranda</a>
                    <a class="top-right-content" id="btn-delete-storage" href="/peminjamanpage"
                        style="{{ Request::is('peminjamanpage*') ? 'font-weight:bold;' : '' }}">Peminjaman</a>
                    <a class="top-right-content" href="/faqpage"
                        style="{{ Request::is('faqpage*') ? 'font-weight:bold;' : '' }}">FAQ</a>
                    <a class="top-right-content" href="/login">Login</a>
                </div>

            </div>
        </div>
    </div>


    @yield('content')



    <footer class="no-margin">

        <div class="footer-content">
            <div class="top-footer">
                <img src="https://upload.wikimedia.org/wikipedia/commons/b/b6/Kejaksaan_Agung_Republik_Indonesia_new_logo.png"
                    width="7%">
                <div id="judul-footer">
                    <h3>Kejaksaan Tinggi Jawa Tengah</h3>
                    <h5>"Menjadi Lembaga Penegak Hukum yang Profesional, Proporsional, dan Akuntabel"</h5>
                </div>
            </div>
            <hr color="#d98e04" width="100%" size="2px">
            <div class="bottom-footer">
                <div class="bottom-footer-content">
                    <div class="bottom-footer-upper">
                        <h4>Kantor Kami</h4>
                    </div>
                    <div class="bottom-footer-downer">
                        <div style="overflow:hidden;resize:none;max-width:100%;width:70%;height:250px;">
                            <div id="embedded-map-display" style="height:100%; width:100%;max-width:100%;">
                                <iframe style="height:100%;width:100%;border:0;" frameborder="0"
                                    src="https://www.google.com/maps/embed/v1/place?q=Kejaksaan+Tinggi+Jawa+Tengah,+Jalan+Pahlawan,+Pleburan,+Semarang+City,+Central+Java,+Indonesia&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
                            </div>
                            <style>
                                #embedded-map-display .text-marker {}

                                .map-generator {
                                    max-width: 100%;
                                    max-height: 100%;
                                    background: none;
                                }
                            </style>
                        </div>
                    </div>

                </div>
                <div class="bottom-footer-content">
                    <div class="bottom-footer-upper">
                        <h4>Kontak</h4>
                    </div>
                    <div class="bottom-footer-downer">
                        <h5 class="footer-kontak">Alamat</h5>
                        <h6 class="footer-kontak-content">Jl. Pahlawan No.14, Pleburan, Kec. Semarang Sel., Kota
                            Semarang, Jawa Tengah 50241
                        </h6>
                        <h5 class="footer-kontak">Telepon</h5>
                        <h6 class="footer-kontak-content">(024)8413-985</h6>
                        <h5 class="footer-kontak">Fax</h5>
                        <h6 class="footer-kontak-content">(024)8311-850</h6>
                        <h5 class="footer-kontak">Website</h5>
                        <h6 class="footer-kontak-content">
                            <a href="https://kejati-jawatengah.kejaksaan.go.id" target="_blank">
                                https://kejati-jawatengah.kejaksaan.go.id
                            </a>
                        </h6>
                    </div>
                </div>
                <div class="bottom-footer-content">
                    <div class="bottom-footer-upper">
                        <h4>Sosial Media</h4>
                    </div>
                    <div class="bottom-footer-downer">
                        <a href="https://www.facebook.com/KejatiJateng/" target="_blank"><img class="footer-sosmed-logo"
                                src="images/Facebook.png" alt="Facebook"></a>
                        <a href="https://mobile.twitter.com/kejati_jateng" target="_blank"><img
                                class="footer-sosmed-logo" src="images/Twitter.png" alt="Twitter"></a>
                        <a href='https://www.instagram.com/kejatijateng' target="_blank"><img class="footer-sosmed-logo"
                                src="images/Instagram.png" alt="Instagram"></a>
                        <a href='https://youtube.com/@kejaksaantinggijawatengah2021' target="_blank"><img
                                class="footer-sosmed-logo" src="images/Youtube.png" alt="Youtube"></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        document.getElementById("btn-delete-storage").addEventListener("click", function(){
            localStorage.removeItem("selected_ids");
            location.reload();
        });
    </script>
</body>

</html>