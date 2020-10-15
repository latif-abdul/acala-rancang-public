@extends('master')
@section('title', 'Exhibition')
@section('konten')
	<div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Exhibition</h1>
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
              
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                              <thead>
                  <div class='btn-group'>  <a href='/admin/tambah_exhibition'>   <button class='btn btn-success'>Tambah Exhibition<i class='icon-plus icon-white'></i></button></a></div><br><br>
                                    
                                        <tr>
										   <th >ID</th>
										   <th >Judul</th>
										   <th >Pembuat</th>
										   <th >Instansi</th>
										   <th >Kategori</th> 
										   <th >Deskripsi</th>
										   <th >Action</th>
                                            
                                        </tr>
                                    </thead>
                  
                                    <tbody id="anggota">
										@foreach($exhibition as $ex)
											<tr>
												<td>{{$ex->id_exhibition}}</td>
												<td>{{$ex->judul_exhibition}}</td>
												<td>{{$ex->author}}</td>
												<td>{{$ex->instansi}}</td>
												<td>{{$ex->kategori}}</td>
												<td>{{$ex->desc}}</td>
												<td>
													<a href="/admin/detail/{{$ex->id_exhibition}}" class="badge badge-primary">Detail</a>
													<a href="/admin/edit/{{$ex->id_exhibition}}" class="badge badge-warning">Edit</a>
													<a href="/admin/hapus/{{$ex->id_exhibition}}" class="badge badge-danger">Hapus</a>
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