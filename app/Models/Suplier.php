<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;




class Suplier extends Model
{
    use HasFactory;
    // protected $guarded = ['id'];
    protected $fillable = [
            'nama_suplier',
            'no_telp_suplier',
            'alamat_suplier',
            'keterangan'
    ];
   
}
