<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;

class podcastController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
		$podcast = DB::table('podcast')->get();
		return view('podcast_admin', ['podcast' => $podcast]);
	}

	public function tambahPodcast(){
		return view('tambah_podcast');
	}

	public function simpanPodcast(Request $request){
		 $this->validate($request, [
              'judul' => 'required',
              'file' => 'required'
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
				
             }
         }
		 DB::table('podcast')->insert([
					'judul_podcast' => $request->judul,
					'file_podcast' => $imageName
				]);
				return redirect('/admin/podcast_admin');
	}

	public function editPodcast($id){
		$podcast = DB::table('podcast')->where('id_podcast', $id)->get();
		return view('edit_podcast', ['podcast' => $podcast]);
	}

	public function updatePodcast(Request $request){
		 $this->validate($request, [
              'judul' => 'required',
              'file' => 'required'
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
				
             }
         }
		 DB::table('podcast')->where('id_podcast', $request->id)->update([
					'judul_podcast' => $request->judul,
					'file_podcast' => $imageName
				]);
				return redirect('/admin/podcast_admin');
	}
	
	public function hapusPodcast($id){
		$podcast = DB::table('podcast')->where('id_podcast', $id)->delete();
		return redirect('/admin/podcast_admin');
	}
}
