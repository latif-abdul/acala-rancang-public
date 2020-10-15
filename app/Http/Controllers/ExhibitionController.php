<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;

class ExhibitionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $exhibition = DB::table('exhibition')
        ->join('kategori', function ($join) {
            $join->on('exhibition.id_kategori', '=', 'kategori.id_kategori');
                 // ->where('contacts.user_id', '>', 5);
        })
        ->get();
		$gambar = DB::table('gambar')->get();
		$video = DB::table('video')->get();
        return view('exhibition_admin', ['exhibition' => $exhibition], ['gambar' => $gambar], ['video' => $video]);
    }
	
	public function tambah()
    {
		$kategori = DB::table('kategori')->get();
        return view('tambah_exhibition', ['kategori' => $kategori]);
    }
	
	public function simpan(Request $request){
         $this->validate($request, [
             'judul' => 'required',
             'pembuat' => 'required',
             'instansi' => 'required',
             'instagram' => 'required',
			 'kategori' => 'required',
			 'deskripsi' => 'required'
         ]);

        $id = DB::table('exhibition')->insertGetId([
            'judul_exhibition' => $request->judul,
            'author' => $request->pembuat,
            'instansi' => $request->instansi,
            'ig_author' => $request->instagram,
			'id_kategori' => $request->kategori,
			'desc' => $request->deskripsi,
        ]);
		
		DB::table('video')->insert([
            'video' => $request->video,
			'id_exhibition' => $id
        ]);
		
		// $request->validate([
            // 'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
        // ]);
        if($request->hasFile('file')) {
            $imageNameArr = [];
			//$file = $request->file;
            foreach ($request->file as $file) {
                // you can also use the original name
                $imageName = time().'-'.$file->getClientOriginalName();
                $imageNameArr[] = $imageName;
                // Upload file to public path in images directory
                $file->move('uploads', $imageName);
                // Database operation
				DB::table('gambar')->insert([
					'gambar' => $imageName,
					'id_exhibition' => $id
				]);
             }
         }
        return redirect('/admin/exhibition');
    }
	
	public function hapus($id){
		// hapus file
		$gambar = DB::table('gambar')->where('id_exhibition', $id)->get();
		foreach($gambar as $img){
			File::delete('uploads/'.$img->gambar);
		}
		// hapus data
        DB::table('exhibition')->where('id_exhibition', $id)->delete();
		DB::table('gambar')->where('id_exhibition', $id)->delete();
		
        return redirect('/admin/exhibition');
    }
	
	    public function edit($id){
        $exhibition = DB::table('exhibition')
            ->leftJoin('video', 'exhibition.id_exhibition', '=', 'video.id_exhibition')
            ->select('exhibition.id_exhibition', 'judul_exhibition', 'author', 'instansi', 'ig_author', 'id_kategori', 'desc', 'video')
			->where('exhibition.id_exhibition', $id)
            ->get();
		$kategori = DB::table('kategori')->get();
        return view('edit_exhibition', ['exhibition' => $exhibition], ['kategori' => $kategori]);
    }
	
	public function update(Request $request){
		$this->validate($request, [
             'judul' => 'required',
             'pembuat' => 'required',
             'instansi' => 'required',
             'instagram' => 'required',
			 'deskripsi' => 'required'
         ]);
        DB::table('exhibition')->where('id_exhibition', $request->id)->update([
            'judul_exhibition' => $request->judul,
            'author' => $request->pembuat,
            'instansi' => $request->instansi,
            'ig_author' => $request->instagram,
			'desc' => $request->deskripsi
        ]);
		DB::table('video')->where('id_exhibition', $request->id)->update([
            'video' => $request->video,
			'id_exhibition' => $request->id
        ]);
		
		if($request->hasFile('file')) {
            $imageNameArr = [];
			//$file = $request->file;
            foreach ($request->file as $file) {
                // you can also use the original name
                $imageName = time().'-'.$file->getClientOriginalName();
                $imageNameArr[] = $imageName;
                // Upload file to public path in images directory
                $file->move('uploads', $imageName);
                // Database operation
				$gambar = DB::table('gambar')->where('id_exhibition', $request->id)->get();
				foreach($gambar as $img){
					File::delete('uploads/'.$img->gambar);
				}
				DB::table('gambar')->insert([
					'gambar' => $imageName,
					'id_exhibition' => $request->id
				]);
             }
         }
        return redirect('/admin/exhibition');
    }
	
	    public function detail($id){
			$exhibition = DB::table('exhibition')
            ->leftJoin('video', 'exhibition.id_exhibition', '=', 'video.id_exhibition')
            ->select('*')
			->where('exhibition.id_exhibition', $id)
            ->get();
			$gambar = DB::table('gambar')->where('id_exhibition', $id)->get();
			// $instagram = new \InstagramScraper\Instagram();
			// foreach($exhibition as $exh){
				// $account = $instagram->getAccount($exh->ig_author);
			// }
			return view('detail_exhibition', ['exhibition' => $exhibition], ['gambar' => $gambar]);
    }
}
