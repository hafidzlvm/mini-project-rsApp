<?php

namespace App\Http\Controllers;

use App\Models\RawatJalan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RawatJalanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = RawatJalan::all();
        return view('rawat_jalan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = RawatJalan::all();
        return view('rawat_jalan.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new RawatJalan;
        $data->waktu_konsul1 = date("H:i");
        $waktu_konsul2 = explode(":", date("H:i"));
        $jam = intval($waktu_konsul2[0]) + 1;
        $waktu_konsul2 = $jam . ":" . $waktu_konsul2[1];
        $data->waktu_konsul2 = $waktu_konsul2;
        $data->pasien = $request->input('nm_pasien');
        $data->no_bpjs = $request->input('no_bpjs');
        $data->poli = $request->input('poli');
        $data->dokter = $request->input('dokter');
        $data->tgl_konsul = date('Y-m-j');
        $data->waktu_status = date('Y-m-j h:i');
        $data->save();
        return redirect()->route('rawat-jalan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(RawatJalan $rawatJalan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RawatJalan $id, $antrian)
    {
        $data_edit = RawatJalan::findOrFail($id);
        return ([
            $data_edit,
            $antrian
        ]);
    }
    public function updateData(Request $request, $id){
        $data = RawatJalan::find($id);
        $data->pasien = $request->pasien;
        $data->no_bpjs = $request->no_bpjs;
        $data->dokter = $request->dokter;
        $data->poli = $request->poli;
        $data->save();
        return redirect()->route('rawat-jalan.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateStatus(Request $request, RawatJalan $id)
    {
        
        $data = new RawatJalan;
        $data = RawatJalan::find($id->id_rawat_jalan);
        if (!$data) {
            // Data tidak ditemukan
            return redirect()->route('rawat-jalan.index');
        }
        
        $newStatus = $request->input('status');
        $data->status = $newStatus;
        $data->waktu_status = Carbon::now();
        $data->save();

        return redirect()->route('rawat-jalan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RawatJalan $id)
    {
        $id->delete();
        return redirect()->route('rawat-jalan.index');
    }
}
