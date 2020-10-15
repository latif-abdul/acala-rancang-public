@extends('master')

@section('title', 'Edit Author')

@section('konten')

<center>
<div class="col-md-4 mt-5 mb-5">
<!-- Material form login -->
<!-- Material form register -->
<div class="card" id="reg">

    <h5 class="card-header primary-color white-text text-center py-4">
        <strong>Edit Author</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

		@foreach($author as $penulis)
        <!-- Form -->
        <form class="text-center md-form" id="upload" style="color: #757575;" action="/admin/updateAuthor" method="post" enctype="multipart/form-data">
					{{ csrf_field() }}
				<input type="hidden" name="id" value="{{ $penulis->id }}"><br>
                    <!-- First name -->
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormJudul" class="form-control" name="nama" value="{{$penulis->name}}">
                        <label for="materialRegisterFormJudul">Nama</label>
                    </div>
         
         
                    <!-- Last name -->
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormFb" class="form-control" name="fb" value="{{$penulis->facebook}}">
                        <label for="materialRegisterFormFb">Facebook</label>
                    </div>
     
            <!-- username -->
            <div class="md-form mt-0">
                <input type="text" id="twitter" class="form-control" name="twitter" value="{{$penulis->twitter}}">
                <label for="twitter">Twitter</label>
            </div>
			<div class="md-form mt-0">
                <input type="text" id="GooglePlus" class="form-control" name="GooglePlus" value="{{$penulis->google_plus}}">
                <label for="GooglePlus">GooglePlus</label>
            </div>
			
			<div class="md-form mt-0">
                <input type="text" id="LinkedIn" class="form-control" name="LinkedIn" value="{{$penulis->linkedin}}">
                <label for="LinkedIn">LinkedIn</label>
            </div>

            <!-- E-mail -->
            <div class="md-form mt-0">
                <textarea id="form7" class="md-textarea form-control" rows="5" name="bio">{{$penulis->bio}}</textarea>
  <label for="form7">Bio</label>
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