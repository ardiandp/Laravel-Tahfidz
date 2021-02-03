<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlquranController extends Controller
{
    public function index()
    {
    	$surat = DB::table('surat')->paginate(10);
    	return view ('alquran/surat',['surat'=> $surat]);
    }

    public function all()
    {
    	$data = DB::table('surat')->get();
    	return view ('alquran/all',['data'=>$data]);

    }
}
