<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    public function index(){
		return view('loginPengunjung');
	}
	
	public function exhibition(){
		// $exhibition = DB::select('select * from exhibition left join (select * from gambar group by id_exhibition) as gambar on exhibition.id_exhibition = gambar.id_exhibition');
		$exhibition = DB::table('exhibition')
			->leftJoin(DB::raw('(select * from gambar group by id_exhibition) as gambar'), 'gambar.id_exhibition', '=', 'exhibition.id_exhibition')
			->get();
		$gambar = DB::table('gambar')
            ->leftJoin('video', 'gambar.id_exhibition', '=', 'video.id_exhibition')
            ->orderBy('gambar.id_exhibition', 'asc')
			->select('gambar.id_gambar', 'video.id_video', 'gambar.gambar', 'video.video', 'gambar.id_exhibition')
			->get();
		return view('exhibition', ['exhibition' => $exhibition], ['gambar' => $gambar]);
	}
	
	public function katInteriorDesign(){
		// $exhibition = DB::select('select * from exhibition left join (select * from gambar group by id_exhibition) as gambar on exhibition.id_exhibition = gambar.id_exhibition');
		$exhibition = DB::table('exhibition')
			->leftJoin(DB::raw('(select * from gambar group by id_exhibition) as gambar'), 'gambar.id_exhibition', '=', 'exhibition.id_exhibition')
			->where('id_kategori', 1)
			->get();
		$gambar = DB::table('gambar')
            ->leftJoin('video', 'gambar.id_exhibition', '=', 'video.id_exhibition')
            ->orderBy('gambar.id_exhibition', 'asc')
			->select('gambar.id_gambar', 'video.id_video', 'gambar.gambar', 'video.video', 'gambar.id_exhibition')
			->get();
		return view('exhibition', ['exhibition' => $exhibition], ['gambar' => $gambar]);
	}
	
	public function katFurniture(){
		// $exhibition = DB::select('select * from exhibition left join (select * from gambar group by id_exhibition) as gambar on exhibition.id_exhibition = gambar.id_exhibition');
		$exhibition = DB::table('exhibition')
			->leftJoin(DB::raw('(select * from gambar group by id_exhibition) as gambar'), 'gambar.id_exhibition', '=', 'exhibition.id_exhibition')
			->where('id_kategori', 2)
			->get();
		$gambar = DB::table('gambar')
            ->leftJoin('video', 'gambar.id_exhibition', '=', 'video.id_exhibition')
            ->orderBy('gambar.id_exhibition', 'asc')
			->select('gambar.id_gambar', 'video.id_video', 'gambar.gambar', 'video.video', 'gambar.id_exhibition')
			->get();
		return view('exhibition', ['exhibition' => $exhibition], ['gambar' => $gambar]);
	}
	
	public function katSchematicDrawing(){
		// $exhibition = DB::select('select * from exhibition left join (select * from gambar group by id_exhibition) as gambar on exhibition.id_exhibition = gambar.id_exhibition');
		$exhibition = DB::table('exhibition')
			->leftJoin(DB::raw('(select * from gambar group by id_exhibition) as gambar'), 'gambar.id_exhibition', '=', 'exhibition.id_exhibition')
			->where('id_kategori', 3)
			->get();
		$gambar = DB::table('gambar')
            ->leftJoin('video', 'gambar.id_exhibition', '=', 'video.id_exhibition')
            ->orderBy('gambar.id_exhibition', 'asc')
			->select('gambar.id_gambar', 'video.id_video', 'gambar.gambar', 'video.video', 'gambar.id_exhibition')
			->get();
		return view('exhibition', ['exhibition' => $exhibition], ['gambar' => $gambar]);
	}
	
	public function katNirmana(){
		// $exhibition = DB::select('select * from exhibition left join (select * from gambar group by id_exhibition) as gambar on exhibition.id_exhibition = gambar.id_exhibition');
		$exhibition = DB::table('exhibition')
			->leftJoin(DB::raw('(select * from gambar group by id_exhibition) as gambar'), 'gambar.id_exhibition', '=', 'exhibition.id_exhibition')
			->where('id_kategori', 4)
			->get();
		$gambar = DB::table('gambar')
            ->leftJoin('video', 'gambar.id_exhibition', '=', 'video.id_exhibition')
            ->orderBy('gambar.id_exhibition', 'asc')
			->select('gambar.id_gambar', 'video.id_video', 'gambar.gambar', 'video.video', 'gambar.id_exhibition')
			->get();
		return view('exhibition', ['exhibition' => $exhibition], ['gambar' => $gambar]);
	}
	
	public function interiorExp(){
		$interiorExp = DB::table('interior_experience')
			->select(DB::raw('substring(isi, 1, 140) as isi'), 'id', 'judul', 'gambar', 'id_author')
			->get();
		return view('workshop', ['interiorExp' => $interiorExp]);
	}
	
	public function readInteriorExp($id){
		$interiorExp = DB::table('interior_experience')
			->join('author', 'interior_experience.id_author', '=', 'author.id')
			->where('interior_experience.id', $id)
			->get();
		$suggestion = DB::table('interior_experience')
		->inRandomOrder()
		->select(DB::raw('substring(isi, 1, 140) as isi'), 'id', 'judul', 'gambar', 'id_author')
		->limit ('3')
		->get();
		return view('workshop2', ['interiorExp' => $interiorExp], ['suggestion' => $suggestion]);
	}
	
	public function umkm(){
		$umkm = DB::table('umkm')
		->select(DB::raw('substring(bio, 1, 140) as bio'), 'id', 'nama', 'gambar')
		->get();
		return view('umkm', ['umkm' => $umkm]);
	}
	
	public function readUmkm($id){
		$umkm = DB::table('umkm')
			->where('umkm.id', $id)
			->get();
		$suggestion = DB::table('umkm')
		->inRandomOrder()
		->select(DB::raw('substring(bio, 1, 140) as bio'), 'id', 'nama', 'gambar')
		->limit ('3')
		->get();
		return view('umkm2', ['umkm' => $umkm], ['suggestion' => $suggestion]);
	}
	
	public function aboutus(){
		return view('about us');
	}
	
	public function podcast(){
		return view('podcast');
	}
	
	public function login(Request $request){
		$this->validate($request, [
             'nama' => 'required',
             'email' => 'required',
			 'instansi' => 'required'
         ]);
		 DB::table('pengunjung')->insert([
					'nama' => $request->nama,
					'email' => $request->email,
					'instansi' => $request->instansi
				]);
				return view('home');
	}
}
