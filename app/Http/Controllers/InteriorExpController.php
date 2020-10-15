<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;

class InteriorExpController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
	
	public function index()
    {
        $interiorExp = DB::table('interior_experience')
        ->join('author', function ($join) {
            $join->on('interior_experience.id_author', '=', 'author.id');
    			// ->where('contacts.user_id', '>', 5);
        })
		->select(DB::raw('substring(isi, 1, 86) as isi'), 'interior_experience.id', 'judul', 'name', 'gambar')
        ->get();
		$author = DB::table('author')->get();
        return view('interior_experience_admin', ['interiorExp' => $interiorExp], ['author' => $author]);
    }
	
	public function tambahAuthor(){
		return view('tambah_author');
	}
	
	public function tambahInteriorExp(){
		$author = DB::table('author')->get();
		return view('tambah_interiorExp',  ['author' => $author]);
	}
	
	public function simpanInteriorExp(Request $request){
		$this->validate($request, [
             'judul' => 'required',
             'author' => 'required',
             'isi' => 'required'
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
				DB::table('interior_experience')->insert([
					'judul' => $request->judul,
					'isi' => $request->isi,
					'gambar' => $imageName,
					'id_author' => $request->author
				]);
             }
         }
		return redirect('/admin/InteriorExp');
	}
	
	public function simpanAuthor(Request $request){
		$this->validate($request, [
             'nama' => 'required',
             'fb' => 'required',
             'twitter' => 'required',
			 'GooglePlus' => 'required',
             'LinkedIn' => 'required',
             'bio' => 'required'
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
				DB::table('author')->insert([
					'name' => $request->nama,
					'facebook' => $request->fb,
					'twitter' => $request->twitter,
					'google_plus' => $request->GooglePlus,
					'linkedin' => $request->LinkedIn,
					'profile_picture' => $imageName,
					'bio' => $request->bio
				]);
             }
         }
		return redirect('/admin/InteriorExp');
	}
	
	public function editInteriorExp($id)
    {
        $interiorExp = DB::table('interior_experience')->where('interior_experience.id', $id)->get();
		$author = DB::table('author')->get();
        return view('edit_interiorExp', ['interiorExp' => $interiorExp], ['author' => $author]);
    }
	
	public function editAuthor($id)
    {
		$author = DB::table('author')->where('id', $id)->get();
        return view('edit_Author', ['author' => $author]);
    }
	
	public function updateInteriorExp(Request $request){
			$this->validate($request, [
             'judul' => 'required',
             'author' => 'required',
             'isi' => 'required'
         ]);
		 $interiorExp = DB::table('interior_experience')->where('interior_experience.id', $request->id)->get();
		 foreach($interiorExp as $ie){
			File::delete('uploads/'.$ie->gambar);
		}
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
				DB::table('interior_experience')->where('interior_experience.id', $request->id)->update([
					'judul' => $request->judul,
					'isi' => $request->isi,
					'gambar' => $imageName,
					'id_author' => $request->author
				]);
             }
         }
		return redirect('/admin/InteriorExp');
	}
	
	public function updateAuthor(Request $request){
			$this->validate($request, [
             'nama' => 'required',
             'fb' => 'required',
             'twitter' => 'required',
			 'GooglePlus' => 'required',
             'LinkedIn' => 'required',
             'bio' => 'required'
         ]);
		 $author = DB::table('author')->where('id', $request->id)->get();
		 foreach($author as $penulis){
			File::delete('uploads/'.$penulis->profile_picture);
		}
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
				DB::table('author')->where('id', $request->id)->update([
					'name' => $request->nama,
					'facebook' => $request->fb,
					'twitter' => $request->twitter,
					'google_plus' => $request->GooglePlus,
					'linkedin' => $request->LinkedIn,
					'profile_picture' => $imageName,
					'bio' => $request->bio
				]);
             }
         }
		return redirect('/admin/InteriorExp');
	}
	
	public function detailInteriorExp($id){
		$interiorExp = DB::table('interior_experience')
            ->join('author', 'interior_experience.id_author', '=', 'author.id')
            ->select('*')
			->where('interior_experience.id', $id)
            ->get();
		return view('detail_interiorExp', ['interiorExp' => $interiorExp]);
	}
	
	public function detailAuthor($id){
		$author = DB::table('author')->where('id', $id)->get();
		return view('detail_author', ['author' => $author]);
	}
	
	public function hapusInteriorExp($id){
		// hapus file
		$interiorExp = DB::table('interior_experience')->where('id', $id)->get();
		foreach($interiorExp as $ie){
			File::delete('uploads/'.$ie->gambar);
		}
		// hapus data
        DB::table('interior_experience')->where('id', $id)->delete();
		
        return redirect('/admin/InteriorExp');
    }
	
	public function hapusAuthor($id){
		// hapus file
		$author = DB::table('author')->where('id', $id)->get();
		foreach($author as $penulis){
			File::delete('uploads/'.$penulis->profile_picture);
		}
		// hapus data
        DB::table('author')->where('id', $id)->delete();
		
        return redirect('/admin/InteriorExp');
    }
	
}
