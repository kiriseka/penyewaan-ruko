<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Customer;


class CustomerController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
        $customer = Customer::all();
    	// $customer = DB::table('customer')->get();

    	// mengirim data pegawai ke view index
    	return view('index',['customer' => $customer]);

    }
}
