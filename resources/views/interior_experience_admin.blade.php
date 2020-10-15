@extends('master')
@section('title', 'Interior Experience')
@section('konten')
	<div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Interior Experience</h1>
                </div>
                <!--End Page Header -->
            </div>

            <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12">
                    <div class="alert alert-info">
                        <i class="fa fa-folder-open"></i><b>&nbsp;Hello ! </b>Selamat Bekerja <b>Bos</b>
                    </div>
                </div>
                <!--end  Welcome -->
            </div>
      
                  <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
            
                        <div class="panel-body">
                            <div class="table-responsive">
              
                                
                  <div class='btn-group'>  
				  <a href='/admin/tambah_interiorExp'>   
				  <button class='btn btn-success'>Tambah Interior Experience<i class='icon-plus icon-white'></i></button></a>
				  <a href='/admin/tambah_author'>   
				  <button class='btn btn-success'>Tambah Author<i class='icon-plus icon-white'></i></button></a>
				  
				  </div><br><br>
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                              <thead>
                                        <tr>
										   <th >ID</th>
										   <th >Judul</th>
										   <th >Gambar</th>
										   <th >Isi</th>
										   <th >Penulis</th>
										   <th >Action</th>
                                            
                                        </tr>
                                    </thead>
                  
                                    <tbody id="anggota">
										@foreach($interiorExp as $ie)
											<tr>
												<td>{{$ie->id}}</td>
												<td>{{$ie->judul}}</td>
												<td><img src="{{asset('uploads')}}/{{$ie->gambar}}" style="width: 54px; height: 36px; "></td>
												<td>{{$ie->isi}}...</td>
												<td>{{$ie->name}}</td>
												
												<td>
													<a href="/admin/detail_interiorExp/{{$ie->id}}" class="badge badge-primary">Detail</a>
													<a href="/admin/edit_interiorExp/{{$ie->id}}" class="badge badge-warning">Edit</a>
													<a href="/admin/hapusInteriorExp/{{$ie->id}}" class="badge badge-danger">Hapus</a>
												</td>
											</tr>
										@endforeach
                  </tbody>
                  
                                </table>
								<h3 class="page-header">Author</h3>
								<table class="table table-striped table-bordered table-hover" id="dataTables-example">
                              <thead>
                                        <tr>
										   <th >ID</th>
										   <th >Nama</th>
										   <th >Bio</th>
										    <th >Action</th>
                                        </tr>
                                    </thead>
                  
                                    <tbody id="anggota">
										@foreach($author as $penulis)
											<tr>
												<td>{{$penulis->id}}</td>
												<td>{{$penulis->name}}</td>
												<td>{{$penulis->bio}}</td>
			
												
												<td>
													<a href="/admin/detail_author/{{$penulis->id}}" class="badge badge-primary">Detail</a>
													<a href="/admin/edit_author/{{$penulis->id}}" class="badge badge-warning">Edit</a>
													<a href="/admin/hapusAuthor/{{$penulis->id}}" class="badge badge-danger">Hapus</a>
												</td>
											</tr>
										@endforeach
                  </tbody>
                  
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                </div>
                <div class="col-lg-6">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                </div>
                <div class="col-lg-6">
                 </div>
            </div>
            <div class="row">
                <div class="col-lg-6">

                </div>
                <div class="col-lg-6">
                     
                </div>
            </div>
@endsection