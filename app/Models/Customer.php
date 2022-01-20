<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Customer extends Eloquent
{
    // use HasFactory;
    protected $connection ="mongodb";
    protected $collection = "customer";
    protected $fillable = [
        "kode_customer",
        "nama_customer",
        "no_hp_customer"
    ];
}
