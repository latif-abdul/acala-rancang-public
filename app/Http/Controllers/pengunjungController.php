<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pengunjungController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
	
	public function index()
    {
        $pengunjung = DB::table('pengunjung')->get();
        return view('pengunjung', ['pengunjung' => $pengunjung]);
    }
}
