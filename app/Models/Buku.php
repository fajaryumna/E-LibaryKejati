<?php

namespace App\Models;

use App\Models\Peminjaman;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Buku extends Model
{
    use HasFactory;
    protected $table = 'buku';
    protected $guarded = [];

    public function peminjaman(){
        return $this->hasMany(Peminjaman::class);
    }
}
