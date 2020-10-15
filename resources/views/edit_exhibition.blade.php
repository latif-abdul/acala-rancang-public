@extends('master')
@section('title', 'Edit Exhibition')
@section('konten')
<center>
<div class="col-md-4 mt-5 mb-5">
<!-- Material form login -->
<!-- Material form register -->
<div class="card" id="reg">

    <h5 class="card-header primary-color white-text text-center py-4">
        <strong>Tambah Exhibition</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

		@foreach($exhibition as $exh)
        <!-- Form -->
        <form class="text-center md-form" id="upload" style="color: #757575;" action="/admin/update" method="post" enctype="multipart/form-data">
					{{ csrf_field() }}
					<input type="hidden" name="id" value="{{ $exh->id_exhibition }}"><br>
                    <!-- First name -->
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormJudul" class="form-control" name="judul" value="{{$exh->judul_exhibition}}">
                        <label for="materialRegisterFormJudul">Judul</label>
                    </div>
         
         
                    <!-- Last name -->
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormPembuat" class="form-control" name="pembuat" value="{{$exh->author}}">
                        <label for="materialRegisterFormPembuat">Pembuat</label>
                    </div>
     
            <!-- username -->
            <div class="md-form mt-0">
                <input type="text" id="Instansi" class="form-control" name="instansi" value="{{$exh->instansi}}">
                <label for="Instansi">Instansi</label>
            </div>
			<div class="md-form mt-0">
                <input type="text" id="Instagram" class="form-control" name="instagram" value="{{$exh->ig_author}}">
                <label for="Instagram">Instagram</label>
            </div>
			<div class="md-form mt-0">
                <select class="mdb-select md-form" name="kategori">
				  
				  @foreach($kategori as $kat)
					@if($exh->id_kategori = $kat->id_kategori)
					<option value="{{$kat->id_kategori}}" selected>{{$kat->kategori}}</option>
					@else
						<option value="{{$kat->id_kategori}}">{{$kat->kategori}}</option>
					@endif
				  @endforeach
				</select>
            </div>

            <!-- E-mail -->
            <div class="md-form mt-0">
                <textarea id="form7" class="md-textarea form-control" rows="3" name="deskripsi">{{$exh->desc}}</textarea>
  <label for="form7">Deskripsi</label>
            </div>

			<div class="file-field">
				<div class="btn btn-primary btn-sm float-left">
				  <span>Choose files</span>
				  <input type="file" name="file[]" multiple>
				</div>
				<div class="file-path-wrapper">
				  <input class="file-path validate" type="text" placeholder="Upload one or more files">
				</div>
			  </div>
			  <br>
			  <div class="md-form mt-0">
                <input type="text" id="Video" class="form-control" name="video" value="{{$exh->video}}">
                <label for="Video">Link Embed Video</label>
            </div>

            

            



            <!-- Sign up button -->
            <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Save</button>





        </form>
        <!-- Form -->
		@endforeach
    </div>

</div>
<!-- Material form register -->

</div>
</div>
</center>
@endsection