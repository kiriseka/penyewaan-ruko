<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Rent extends Eloquent
{
    // use HasFactory;
    protected $connection ="mongodb";
    protected $collection = "rent";
    protected $fillable = [
        "kode_rent",
        "kode_ruko",
        "nama_customer",
        "kode_customer",
        "harga",
        "tanggal_mulai",
        "tanggal_selesai"
    ];
}
