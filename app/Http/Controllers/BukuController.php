<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Buku;

class BukuController extends Controller
{
    public function indexMain(){
        $datas= DB::table('buku')->paginate(10);
        // dd($datas);
        return view('user.mainpage', ['datas'=> $datas]);
    }

    public function indexPeminjaman(){
        $datas= DB::table('buku')->paginate(10);
        // dd($datas);
        return view('user.peminjamanpage', ['datas'=> $datas]);
    }
}
