<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HadistController extends Controller
{
    //
    public function index()
    {
    	$hadist = DB::table('hadist')->paginate(10);
    	return view ('hadist/hadist',['hadist'=>$hadist]);
    }
}
