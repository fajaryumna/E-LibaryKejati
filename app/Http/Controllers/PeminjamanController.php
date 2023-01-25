<?php

namespace App\Http\Controllers;

use PDF;
use session;
use App\Models\Buku;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Session;

class PeminjamanController extends Controller
{
    public function store_peminjaman(Request $request){
        
        // validasi data
        $data = $request->validate([
            'nama' => 'required',
            'nip' => 'required',
            'email' => 'required',
            'telepon' => 'required',
            'buku_id' => 'required'
        ]);

        // $peminjaman->buku()->attach($request->buku_id);

        // Simpan ke dalam session
        $request->session()->put('peminjaman', [
            'nama' => $data['nama'],
            'nip' => $data['nip'],
            'telepon' => $data['telepon'],
            'email' => $data['email'],
            'buku_id' => $data['buku_id']
        ]);
        
        // store data
        foreach ($data['buku_id'] as $buku_id) {
            $peminjaman = new Peminjaman();
            $peminjaman->nama = $data['nama'];
            $peminjaman->nip = $data['nip'];
            $peminjaman->email = $data['email'];
            $peminjaman->telepon = $data['telepon'];
            $peminjaman->tanggal_pinjam = now();
            $peminjaman->tanggal_pengembalian = now()->addDays(14);
            $peminjaman->buku_id = intval($buku_id);
            $peminjaman->save();

            $buku = Buku::find($buku_id);
            $buku->jumlah = $buku->jumlah - 1;           
            $buku->save();
        }

        // save id ke array
        $buku_array = array();
        foreach ($request->buku_id as $bukuid) {
            $buku_array[] = $bukuid;
        }

        $pdf = PDF::loadView('user.invoicepage', compact('peminjaman', 'buku_array'))->setOptions(['defaultFont' => 'Poppins']);
        return $pdf->download('invoice.pdf');
        return redirect()->route('peminjamanpage');
    }
}
