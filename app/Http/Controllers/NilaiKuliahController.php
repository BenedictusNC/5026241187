<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiKuliahController extends Controller
{
    public function index()
    {
        $NilaiKuliah = DB::table('NilaiKuliah')->get();

        return view('NilaiKuliah.index', ['NilaiKuliah' => $NilaiKuliah
        ]);
    }


    public function tambah(Request $request)
    {
        DB::table('NilaiKuliah')->insert([
            'NRP' => $request->NRP,
            'NilaiAngka' => $request->NilaiAngka,
            'SKS' => $request->SKS,
        ]);

        return redirect('/NilaiKuliah');
    }}
