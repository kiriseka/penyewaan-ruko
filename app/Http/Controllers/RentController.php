<?php

namespace App\Http\Controllers;

use App\Models\Rent;
use App\Http\Requests\StoreRentRequest;
use App\Http\Requests\UpdateRentRequest;
use Illuminate\Support\Facades\DB;

class RentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $rent = Rent::all();
    	// $customer = DB::table('customer')->get();

    	// mengirim data pegawai ke view index
    	return view('rent-data',['rent' => $rent]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create-rent');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRentRequest $request)
    {
        
        //
        
        $rent = new Rent();
        DB::table('rent')->insert([
            'kode_rent' => $request -> kode_rent,
            'kode_ruko' => $request -> kode_ruko,
            'kode_customer' => $request -> kode_customer,
            'nama_customer' => $request -> nama_customer,
            'harga' => $request -> harga,
            'tanggal_mulai' => $request -> tanggal_mulai,
            'tanggal_selesai' => $request -> tanggal_selesai
        ]);
        // $rent -> kode_rent = $request -> nama_customer;
        // $rent -> kode_customer = $request -> kode_customer;
        // // $rent -> nama_customer = $request -> nama_customer;
        // // $rent -> harga = $request -> harga;
        // $rent -> tanggal_mulai = $request -> tanggal_mulai;
        // $rent -> tanggal_selesai = $request -> tanggal_selesai;

        // $rent->save();

        return redirect('/rent-data');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function show(Rent $rent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function edit(Rent $id)
    {
        //
        $rent = Rent::find($id);
        return view('edit-rent',compact('rent',$rent));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRentRequest  $request
     * @param  \App\Models\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRentRequest $request, Rent $id)
    {
        //
        $rent = Rent::find($request->id);

        // DB::table('rent')->where('_id', $request->id)->update([
        //     'kode_rent' => $request -> kode_rent,
        //     'kode_ruko' => $request -> kode_ruko,
        //     'kode_customer' => $request -> kode_customer,
        //     'nama_customer' => $request -> nama_customer,
        //     'harga' => $request -> harga,
        //     'tanggal_mulai' => $request -> tanggal_mulai,
        //     'tanggal_selesai' => $request -> tanggal_selesai
        // ]);

        $rent -> kode_rent = $request -> kode_rent;
        $rent -> kode_ruko = $request -> kode_ruko;
        $rent -> kode_customer = $request -> kode_customer;
        $rent -> nama_customer = $request -> nama_customer;
        $rent -> harga = (int)$request -> harga;
        $rent -> tanggal_mulai = $request -> tanggal_mulai;
        $rent -> tanggal_selesai = $request -> tanggal_selesai;

        $rent->save();
        return redirect('/rent-data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $rent = Rent::findOrFail($id);
        $rent -> delete();
        return redirect('/rent-data');
    }
}
