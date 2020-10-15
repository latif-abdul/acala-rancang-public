@extends('master')
@section('title', 'Podcast')
@section('konten')
	<div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Podcast</h1>
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
                  <div class='btn-group'>  <a href='/admin/tambah_podcast'>   <button class='btn btn-success'>Tambah Podcast<i class='icon-plus icon-white'></i></button></a></div><br><br>
                                    
                                        <tr>
										   <th >ID</th>
										   <th >Judul</th>
										   <th >Podcast</th>
										   <th >Action</th>
                                            
                                        </tr>
                                    </thead>
                  
                                    <tbody id="anggota">
										@foreach($podcast as $pc)
											<tr>
												<td>{{$pc->id_podcast}}</td>
												<td>{{$pc->judul_podcast}}</td>
												<td>
													<audio controls>
													  <source src="{{asset('uploads')}}/{{$pc->file_podcast}}" type="audio/mpeg">
													</audio>
												</td>
												<td>
													<a href="/admin/edit_podcast/{{$pc->id_podcast}}" class="badge badge-warning">Edit</a>
													<a href="/admin/hapus_podcast/{{$pc->id_podcast}}" class="badge badge-danger">Hapus</a>
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