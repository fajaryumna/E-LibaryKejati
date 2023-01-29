<?php

namespace App\Http\Controllers;

use PDF;
use session;
use App\Models\Buku;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input; 

class PeminjamanController extends Controller
{   

    // Store data peminjaman dari user
    public function store_peminjaman(Request $request){
        
        // validasi data
        $data = $request->validate([
            'nama' => 'required',
            'nip' => 'required',
            'email' => 'required',
            'telepon' => 'required',
            'buku_id' => 'required'
        ]);

        // Konversi input string ke array 
        $buku_ids = explode(" ", $request->buku_id);

        // $peminjaman->buku()->attach($request->buku_id);
        // Simpan ke dalam session
        // $request->session()->put('peminjaman', [
        //     'nama' => $data['nama'],
        //     'nip' => $data['nip'],
        //     'telepon' => $data['telepon'],
        //     'email' => $data['email'],
        //     'buku_id' => $data['buku_id']
        // ]);
        // $book_id = json_decode(session()->get('book_ids'));

        
        // store data 
        foreach ($buku_ids as $buku_id) {
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
        foreach ($buku_ids as $bukuid) {
            $buku_array[] = $bukuid;
        }

        // Download pdf
        $pdf = PDF::loadView('user.invoicepage', compact('peminjaman', 'buku_array'))->setOptions(['defaultFont' => 'Poppins']);
        return $pdf->download('invoice.pdf');
        return redirect()->route('peminjamanpage');
    }

    // Show data ke tabel peminjaman
    public function data_peminjaman(){
        $peminjaman = DB::table('peminjaman')
            ->join('buku', 'peminjaman.buku_id', '=', 'buku.id')
            ->select('peminjaman.*', 'buku.judul_buku as judul', 'buku.no_rak as rak')
            ->get();
        // dd($peminjaman);
        return view('admin.peminjaman.index', ['peminjaman' => $peminjaman], );
    }

    public function update_pengembalian($id){
        // dd($id);
        $peminjaman = Peminjaman::find($id);
        // dd($peminjaman);

        // Mengecek kondisi status buku
        if($peminjaman->status == 'Kembali'){
            return redirect()->route('data_peminjaman')->with('error', 'Buku sudah dikembalikan');
        }

        // update jumlah buku
        $buku = Buku::find($peminjaman->buku_id);
        $buku->jumlah += 1;
        $buku->save();

        $peminjaman->status = "Kembali";
        $peminjaman->save();
        return redirect()->route('data_peminjaman')->with('message', 'Buku dengan judul '.$buku->judul.' telah dikembalikan');
    }

    // pergi ke tampilan edit buku
    public function edit_peminjaman($id) {
        // dd($peminjaman);

        $peminjaman = DB::table('peminjaman')
            ->join('buku', 'peminjaman.buku_id', '=', 'buku.id')
            ->select('peminjaman.*', 'buku.judul_buku as judul')
            ->where('peminjaman.id', '=', $id)
            ->get();
        // dd($peminjaman);
        return view('admin.peminjaman.edit', ['peminjaman'=> $peminjaman]);
    }

    // update buku dengan query builder dan typed Bindings
    public function update_peminjaman($id, Request $request) {
    
        $peminjaman = Peminjaman::find($id);
        $peminjaman->status = "Diperpanjang";
        $peminjaman->update($request->all());

        return redirect()->route('data_peminjaman')->with('success', 'Peminjaman berhasil di perpanjang');
    }

    public function delete_peminjaman($id){
        $peminjaman = Peminjaman::find($id);
        $peminjaman->delete();
        return redirect()->route('data_peminjaman')->with('success', 'Data peminjaman berhasil dihapus');
    }
}
