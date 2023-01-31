<?php

namespace App\Http\Controllers;

use session;
use App\Models\Buku;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{

    // Fungsi untuk sisi user
    public function indexMain(Request $request){
        $judul_buku = $request->input('judul_buku');
        $nama_pengarang = $request->input('nama_pengarang');
        $penerbit = $request->input('penerbit');
        $tahun_terbit = $request->input('tahun_terbit');
        $jenis_buku = $request->input('jenis_buku');

        $query = Buku::where('jumlah','>',0);
        if (!empty($judul_buku)) {
            $query->where('judul_buku', 'like', '%'.$judul_buku.'%');
        }
        if(!empty($nama_pengarang)){
            $query->where('nama_pengarang', 'like', '%'.$nama_pengarang.'%');
        }
        if(!empty($penerbit)){
            $query->where('penerbit', 'like', '%'.$penerbit.'%');
        }
        if(!empty($tahun_terbit)){
            $query->where('tahun_terbit', 'like', '%'.$tahun_terbit.'%');
        }
        if(!empty($jenis_buku)){
            $query->where('jenis_buku', 'like', '%'.$jenis_buku.'%');
        }
        $page = $request->pagination ?: 10;
        $datas = $query->paginate($page)->withQueryString();
        return view('user.mainpage', ['datas' => $datas]);
    }

    public function indexPeminjaman(Request $request){

        $judul_buku = $request->input('judul_buku');
        $nama_pengarang = $request->input('nama_pengarang');
        $penerbit = $request->input('penerbit');
        $tahun_terbit = $request->input('tahun_terbit');
        $jenis_buku = $request->input('jenis_buku');

        // $selectedIds = json_decode(localStorage.getItem('selected_ids'));
        // $selectedIds = json_decode($request->session()->get('selected_ids'));
        // $books = Book::whereIn('id', $selectedIds)->orderBy('id', 'ASC')->get();
        // $selectedIds = json_decode(request()->input('selected_ids'));
        // dd($selectedIds);
        $query = Buku::where('jumlah','>',0);
        
        if (!empty($judul_buku)) {
            $query->where('judul_buku', 'like', '%'.$judul_buku.'%');
        }
        if(!empty($nama_pengarang)){
            $query->where('nama_pengarang', 'like', '%'.$nama_pengarang.'%');
        }
        if(!empty($penerbit)){
            $query->where('penerbit', 'like', '%'.$penerbit.'%');
        }
        if(!empty($tahun_terbit)){
            $query->where('tahun_terbit', 'like', '%'.$tahun_terbit.'%');
        }
        if(!empty($jenis_buku)){
            $query->where('jenis_buku', 'like', '%'.$jenis_buku.'%');
        }

        $page = $request->pagination ?: 10;
        $datas = $query->paginate($page)->withQueryString();
        return view('user.peminjamanpage', ['datas'=> $datas]);
    }

    public function indexBuku(){
        $books = Buku::all();
        return view('admin.buku.index', ['books' => $books]);
    }

    // Data table dengan server-side
    public function  dataBuku(){
        $buku = Buku::all();

        return DataTables::of($buku)
            // ->addColumn('action', function ($buku) {
            //     return '<a href="'.route("adminbook").'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>
            //             <a href="'.route("adminbook").'" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
            // })
            ->make(true);

            // return '<a href="'.route("adminbook.edit", $buku->id).'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>
            //             <a href="'.route("adminbook.delete", $buku->id).'" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
    }

    // pergi ke halaman entri buku
    public function create_buku(){
        return view ('admin.buku.create');
    }

    // insert buku dengan query builder dan type bindings
    public function store_buku(Request $request){
        $request->validate([
            'judul_buku' => 'required',
            'no_rak' => 'required',
            'nama_pengarang' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            'jumlah' => 'required',
            'jenis_buku' => 'required',
            'no_klasifikasi' => 'required',

        ]);

        DB::insert('INSERT INTO buku(judul_buku, no_rak, nama_pengarang, penerbit, tahun_terbit, jumlah, jenis_buku, no_klasifikasi) VALUES (:judul_buku, :no_rak, :nama_pengarang, :penerbit, :tahun_terbit, :jumlah, :jenis_buku, :no_klasifikasi)',
        [
            'judul_buku' => $request->judul_buku,
            'no_rak' => $request->no_rak,
            'nama_pengarang' => $request->nama_pengarang,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'jumlah' => $request->jumlah,
            'jenis_buku' => $request->jenis_buku,
            'no_klasifikasi' => $request->no_klasifikasi,
            ]
        );
        return redirect()->route('create_buku')->with('success', 'Data buku berhasil disimpan');
    }

    // pergi ke tampilan edit buku
    public function edit_buku($id) {
        $buku = Buku::find($id);
        return view('admin.buku.edit')->with('buku', $buku);
    }

    // update buku dengan query builder dan typed Bindings
    public function update_buku($id, Request $request) {
        $request->validate([
            'judul_buku' => 'required',
            'no_rak' => 'required',
            'nama_pengarang' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            'jumlah' => 'required',
            'jenis_buku' => 'required',
            'no_klasifikasi' => 'required',
        ]);

        DB::update('UPDATE buku SET judul_buku = :judul_buku, no_rak = :no_rak, nama_pengarang = :nama_pengarang, penerbit = :penerbit, tahun_terbit = :tahun_terbit, jumlah = :jumlah, jenis_buku = :jenis_buku, no_klasifikasi = :no_klasifikasi WHERE id = :id',
        [
            'id' => $id,
            'judul_buku' => $request->judul_buku,
            'no_rak' => $request->no_rak,
            'nama_pengarang' => $request->nama_pengarang,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'jumlah' => $request->jumlah,
            'jenis_buku' => $request->jenis_buku,
            'no_klasifikasi' => $request->no_klasifikasi,
        ]
        );
        return redirect()->route('data_buku')->with('success', 'Data buku berhasil diubah');
    }

    public function delete_buku($id){
        $buku = Buku::find($id);
        $buku->delete();
        return redirect()->route('data_buku')->with('success', 'Data buku berhasil dihapus');
    }
}
