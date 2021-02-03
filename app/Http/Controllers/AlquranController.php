<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlquranController extends Controller
{
    public function index()
    {
    	$surat = DB::table('surat')->get();
    	return view ('alquran/surat',['surat'=> $surat]);
    }
}
