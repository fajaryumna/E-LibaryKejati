<!DOCTYPE html>
<html>

<head>

    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <style>
        body,
        input,
        button {
            font-family: 'Poppins';
        }

        /* Invoice Page */
        .invoice-text {
            text-align: center;
        }

        .invoice-texts {
            margin: 0 auto 0 auto;
        }

        .invoice-table {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: 20px 10%;
            border: 4px solid #d9d9d9;
            border-radius: 10px;
        }

        .invoice-table-contents,
        tr {
            width: 100%;
            margin: 0px;
        }

        #invoice-table-judul {
            border-radius: 0 0 7px 7px;
        }

        #judul-invoice {
            margin: 5px auto;
            font-weight: bold;
            text-align: center;
        }

        .invoice-table-content,
        div.invoice-table-content h4 {
            margin: 3px 7px;
            font-weight: lighter;

        }

        .invoice-table-judul,
        th {
            width: 30%;
            text-align: center;
        }

        .invoice-table-isian,
        td {
            width: 70%;
            text-align: start;
        }

        .even-item-invoice-table {
            background-color: #d9d9d9;
        }

        #tanggal-invoice {
            display: flex;
            flex-direction: column;
            align-items: end;
            margin: 5px 10%;
        }

        .display-flex-between {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .bold {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="invoice-text">
        <h1 class="invoice-texts">PEMINJAMAN BUKU PERPUSTAKAAN KEJAKSAAN TINGGI JAWA TENGAH</h1>
        <h5 class="invoice-texts">Jalan Pemuda, no 10 Pleburan</h5>
        <h5 class="invoice-texts">Pleburan Semarang</h5>
    </div>

    <div class="invoice-table">
        <div class="invoice-table-contents">
            <h2 class="invoice-table-content" id="judul-invoice">DATA PEMINJAMAN</h2>
        </div>


        <div class="display-flex-between invoice-table-contents even-item-invoice-table">
            <h4 class="invoice-table-content invoice-table-judul">Nama Peminjam</h4>
            <div class="invoice-table-content invoice-table-isian">
                <h4>{{ $peminjaman->nama }}</h4>
            </div>
        </div>

        <div class="display-flex-between invoice-table-contents">
            <h4 class="invoice-table-content invoice-table-judul">Tanggal Pinjam</h4>
            <div class="invoice-table-content invoice-table-isian">
                <h4>{{ $peminjaman->tanggal_pinjam->format('d M Y') }}</h4>
            </div>
        </div>

        <div class="display-flex-between invoice-table-contents even-item-invoice-table">
            <h4 class="invoice-table-content invoice-table-judul">Judul Buku / Lemari Buku</h4>
            <div class="invoice-table-content invoice-table-isian">

                @php
                $nomor = 1;
                @endphp

                @foreach ($buku_array as $id_buku)
                @php
                $buku = App\Models\Buku::where('id', $id_buku)->get();
                @endphp
                @foreach ($buku as $bk)
                <h4>{{ $nomor++ }} <span>. </span> {{ $bk->judul_buku }} / <span class='bold'>{{ $bk->no_rak }}</span>
                </h4>
                @endforeach

                @endforeach


                {{-- <h4>1. LEMBAGA PENINJAUAN KEMBALI (PK) PERKARA PIDANA / <span class='bold'>1A</span></h4>
                <h4>2. DELIK DELIK KHUSUS KEJAHATAN MEMBAHAYAKAN KEPERCAYAAN UMUM TERHADAP SURAT, ALAT PEMBAYARAN, ALAT
                    BUKTI,DAN PERADILAN / <span class='bold'>2A</span></h4>
                <h4>3. DARI TIADA PIDANA TANPA KESALAHAN MENUKU KEPADA TIADA PERTANGGUNGJAWABAN PIDANA TANPA KESALAHAN /
                    <span class='bold'>3B</span>
                </h4>
                <h4>4. DELIK DELIK KHUSUS KEJAHATAN JABATAN & KEJAHATAN JABATAN TERTENTU SEBAGAI TINDAK PIDANA KORUPSI /
                    <span class='bold'>4B</span>
                </h4>
                <h4>5. HUKUM ACARA PIDANA surat surat resmi dipengadilan oleh advokad / <span class='bold'>5C</span>
                </h4>
                <h4>6. PERADILAN PIDANA ANAK DIINDONESIA / <span class='bold'>6D</span></h4>
                <h4>7. MENGHITUNG KERUGIAN KEUANGAN NEGARA DALAM TINDAK PIDANA KORUPSI / <span class='bold'>7D</span>
                </h4>
                <h4>8. TERMINOLOGI HUKUM PIDANA / <span class='bold'>8D</span></h4>
                <h4>9. LEMBAGA PIDANA BERSYARAT / <span class='bold'>9D</span></h4>
                <h4>10. MASALAH PENEGAKAN HUKUM DAN KEBIJAKAN HUKUM PIDANA DALAM PENANGGULANGAN KEJAHATAN / <span
                        class='bold'>10E</span></h4> --}}
            </div>
        </div>

        <div class="display-flex-between invoice-table-contents">
            <h4 class="invoice-table-content invoice-table-judul">Jumlah Buku</h4>
            <div class="invoice-table-content invoice-table-isian">
                <h4>
                    {{ count($buku_array) }}
                </h4>
            </div>
        </div>

        <div class="display-flex-between invoice-table-contents even-item-invoice-table" id="invoice-table-judul">
            <h4 class="invoice-table-content invoice-table-judul">Batas Kembali</h4>
            <div class="invoice-table-content invoice-table-isian">
                <h4>{{ $peminjaman->tanggal_pengembalian->format('d M Y') }}</h4>
            </div>
        </div>

    </div>
    <div id="tanggal-invoice">
        <h5>Semarang, {{ $peminjaman->tanggal_pinjam->format('d M Y') }}</h5>
        <br>
        <h5>Kepala Perpustakaan</h5>
    </div>
</body>

</html>