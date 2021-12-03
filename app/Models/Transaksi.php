<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $fillable = ['id','nama','tgl','jenis_id','batas_waktu','tgl_bayar','status','dibayar'];

    public function jenis()
    {
       return $this->belongsTo(Jenis::class);
    }

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }



    use HasFactory;
}
