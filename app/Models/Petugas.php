<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    protected $table = 'petugas';
    protected $fillable = ['id','nama_petugas','jam_pengecekan','jam_selesai','jam_pengambilan','transaksi_id'];

    public function transaksi()
    {
       return $this->belongsTo(Transaksi::class);
    }

    use HasFactory;
}
