@extends('master')
@section('title', 'Pengunjung')
@section('konten')
	<div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Pengunjung</h1>
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
                                    
                                        <tr>
										   <th >ID</th>
										   <th >Nama</th>
										   <th >Email</th>
										   <th >Instansi</th>
                                            
                                        </tr>
                                    </thead>
                  
                                    <tbody id="anggota">
										@foreach($pengunjung as $visitor)
											<tr>
												<td>{{$visitor->id}}</td>
												<td>{{$visitor->nama}}</td>
												<td>
													{{$visitor->email}}
												</td>
												<td>
													{{$visitor->instansi}}</td>
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