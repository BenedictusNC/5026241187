<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HardDiskController extends Controller
{
    public function index()
    {
        $harddisk = DB::table('harddisk')->get();

        return view('harddisk.index', ['harddisk' => $harddisk
        ]);
    }
}
