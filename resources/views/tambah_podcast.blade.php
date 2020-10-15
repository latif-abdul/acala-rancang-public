@extends('master')

@section('title', 'Tambah Podcast')

@section('konten')

<center>
<div class="col-md-8 mt-5 mb-5">
<!-- Material form login -->
<!-- Material form register -->
<div class="card" id="reg">

    <h5 class="card-header primary-color white-text text-center py-4">
        <strong>Tambah Podcast</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">


        <!-- Form -->
        <form class="text-center md-form" id="upload" style="color: #757575;" action="/admin/simpan_podcast" method="post" enctype="multipart/form-data">
					{{ csrf_field() }}
         
                    <!-- First name -->
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormJudul" class="form-control" name="judul">
                        <label for="materialRegisterFormJudul">Judul</label>
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

            

            



            <!-- Sign up button -->
            <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Tambah</button>





        </form>
        <!-- Form -->

    </div>

</div>
<!-- Material form register -->

</div>
</div>
</center>

@endsection