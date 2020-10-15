@extends('master')

@section('title', 'Edit UMKM')

@section('konten')

<center>
<div class="col-md-8 mt-5 mb-5">
<!-- Material form login -->
<!-- Material form register -->
<div class="card" id="reg">

    <h5 class="card-header primary-color white-text text-center py-4">
        <strong>Edit UMKM</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

		@foreach($umkm as $u)
        <!-- Form -->
        <form class="text-center md-form" id="upload" style="color: #757575;" action="/admin/updateUmkm/" method="post" enctype="multipart/form-data">
					{{ csrf_field() }}
				<input type="hidden" name="id" value="{{ $u->id }}"><br>
                    <!-- First name -->
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormJudul" class="form-control" name="nama" value="{{$u->nama}}">
                        <label for="materialRegisterFormJudul">Nama</label>
                    </div>
                    <div class="md-form mt-0">
            </div>
            

            <!-- E-mail -->
            <div class="md-form mt-0">
                <textarea id="form7" class="md-textarea form-control" rows="20" name="bio">{{$u->bio}}</textarea>
  <label for="form7">Bio</label>
            </div>
			<div class="md-form">
                        <input type="text" id="fb" class="form-control" name="fb" value="{{$u->facebook}}">
                        <label for="fb">Facebook</label>
                    </div>
					<div class="md-form">
                        <input type="text" id="twitter" class="form-control" name="twitter" value="{{$u->twitter}}">
                        <label for="twitter">Twitter</label>
                    </div>
					<div class="md-form">
                        <input type="text" id="ig" class="form-control" name="ig" value="{{$u->instagram}}">
                        <label for="ig">Instagram</label>
                    </div>
			<div class="file-field">
				<div class="btn btn-primary btn-sm float-left">
				  <span>Choose files</span>
				  <input type="file" name="file[]" multiple>
				</div>
				<div class="file-path-wrapper">
				  <input class="file-path validate" type="text" placeholder="Upload one or more files" value="{{$u->gambar}}">
				</div>
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