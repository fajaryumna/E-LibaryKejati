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

        $datas = $query->paginate(10)->withQueryString();
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
        // ->whereIn('id', $selectedIds)->orderBy('id', 'ASC')->get();
        
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

        $datas = $query->paginate(10)->withQueryString();
        return view('user.peminjamanpage', ['datas'=> $datas]);
    }

    public function indexBuku(){
        $books = Buku::all();
        return view('admin.buku.index', ['books' => $books]);
        // return view('admin.buku.index');
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

    public function create_buku(){
        return view ('admin.buku.create');
    }
}
