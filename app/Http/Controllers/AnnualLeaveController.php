<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\DetailCuti;
use App\Http\Models\Cuti;

class AnnualLeaveController extends Controller
{
    // Untuk menampilkan list permohonan cuti yang sudah masuk
    public function index()
    {
        $data = DetailCuti::get();
        return response()->json([
            'data' => $data]
        );
    }

    // Untuk membuat permohonan cuti baru, untuk user_id gunakan tabel users dari laravel.
    public function store(Request $request)
    {
        $cuti = Cuti::create($request->all());
        Product::create([
            'cuti_user_id'         => $request->cuti_user_id,
        ]);

        $detail_cuti = DetailCuti::create($request->all());
        Product::create([
            'tanggal_cuti'         => $request->tanggal_cuti,
        ]);
        
        return response()->json([
            'Message' => 'Success add data',
        ]);
    }

    // Untuk menampilkan satu data permohonan izin
    public function show($id)
    {
        $data = DetailCuti::find($id);
        return response()->json([
            'data' => $data]
        );
    }
}
