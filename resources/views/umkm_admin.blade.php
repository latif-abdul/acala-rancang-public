@extends('master')
@section('title', 'UMKM')
@section('konten')
	<div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">UMKM</h1>
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
				  <a href='/admin/tambahUmkm'>   
				  <button class='btn btn-success'>Tambah UMKM<i class='icon-plus icon-white'></i></button></a>
				  
				  </div><br><br>
				  
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
										@foreach($umkm as $u)
											<tr>
												<td>{{$u->id}}</td>
												<td>{{$u->nama}}</td>
												<td>{{$u->bio}}</td>
												
												<td>
													<a href="/admin/detailUmkm/{{$u->id}}" class="badge badge-primary">Detail</a>
													<a href="/admin/editUmkm/{{$u->id}}" class="badge badge-warning">Edit</a>
													<a href="/admin/hapusUmkm/{{$u->id}}" class="badge badge-danger">Hapus</a>
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