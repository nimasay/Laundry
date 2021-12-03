<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    protected $table = 'jenis';
    protected $fillable = ['id','jenis_laundry','harga'];

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }

    use HasFactory;
}
