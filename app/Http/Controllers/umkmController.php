<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;

class umkmController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
	
	public function index()
    {
        $umkm = DB::table('umkm')->get();
        return view('umkm_admin', ['umkm' => $umkm]);
    }
	
	public function tambahUmkm(){
		return view('tambah_umkm');
	}
	
	public function simpanUmkm(Request $request){
		$this->validate($request, [
             'nama' => 'required',
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
				
             }
         }
		 DB::table('umkm')->insert([
					'nama' => $request->nama,
					'bio' => $request->bio,
					'facebook' => $request->fb,
					'twitter' => $request->twitter,
					'instagram' => $request->ig,
					'gambar' => $imageName
				]);
				return redirect('/admin/umkm');
	}
	
	public function editUmkm($id){
		$umkm = DB::table('umkm')->where('id', $id)->get();
		return view('edit_umkm', ['umkm' => $umkm]);
	}
	
	public function updateUmkm(Request $request){
		$this->validate($request, [
             'nama' => 'required',
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
				DB::table('umkm')->where('id', $request->id)->update([
					'nama' => $request->nama,
					'bio' => $request->bio,
					'facebook' => $request->fb,
					'twitter' => $request->twitter,
					'instagram' => $request->ig,
					'gambar' => $imageName
				]);
             }
         }
		 else{
		 DB::table('umkm')->where('id', $request->id)->update([
					'nama' => $request->nama,
					'bio' => $request->bio,
					'facebook' => $request->fb,
					'twitter' => $request->twitter,
					'instagram' => $request->ig
				]);
				
		 }
		 return redirect('/admin/umkm');
	}
	
	public function detailUmkm($id){
		$umkm = DB::table('umkm')->where('id', $id)->get();
		return view('detail_umkm', ['umkm' => $umkm]);
	}
	
	public function hapusUmkm($id){
		$umkm = DB::table('umkm')->where('id', $id)->get();
		foreach($umkm as $u){
			File::delete('uploads/'.$u->gambar);
		}
		$umkm = DB::table('umkm')->where('id', $id)->delete();
		return redirect('/admin/umkm');
	}
}
