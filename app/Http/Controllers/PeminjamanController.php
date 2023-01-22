<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Peminjaman;
use PDF;

class PeminjamanController extends Controller
{
    public function store_peminjaman(Request $request){
        
        $data = $request->validate([
            'nama' => 'required',
            'nip' => 'required',
            'email' => 'required',
            'telepon' => 'required',
            'buku_id' => 'required'
        ]);

        $peminjaman = new Peminjaman();
        $peminjaman->nama = $data['nama'];
        $peminjaman->nip = $data['nip'];
        $peminjaman->email = $data['email'];
        $peminjaman->telepon = $data['telepon'];
        $peminjaman->tanggal_pinjam = now();
        $peminjaman->tanggal_pengembalian = now()->addDays(14);
        $peminjaman->save();

        // $peminjaman->buku()->attach($request->buku_id);
    
        foreach ($data['buku_id'] as $buku_id) {
            // $peminjaman = new Peminjaman();
            // $peminjaman->nama = $data['nama'];
            // $peminjaman->nip = $data['nip'];
            // $peminjaman->email = $data['email'];
            // $peminjaman->telepon = $data['telepon'];
            // $peminjaman->tanggal_pinjam = now();
            // $peminjaman->tanggal_pengembalian = now()->addDays(14);

            $buku = Buku::find($buku_id);
            $buku->jumlah = $buku->jumlah - 1;           
            $buku->save();

            $peminjaman->buku_id = $buku_id;
            $peminjaman->save();
            // $peminjaman->buku()->attach($peminjaman);
        }
        // $peminjaman->buku_id = $data['buku_id'];
        $peminjaman->save();

        // dd($buku);
        // dd($peminjaman);


        // dd($peminjaman);
        // $buku = Book::whereIn('id', $data['book_id'])->get();
        // $pdf = PDF::loadView('user.invoicepage', compact('peminjaman','buku'));
        // return $pdf->download('user.invoicepage');

        return redirect()->route('peminjamanpage');


    }
}
