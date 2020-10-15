@extends('master')

@section('title', 'Edit Interior Experience')

@section('konten')

<center>
<div class="col-md-8 mt-5 mb-5">
<!-- Material form login -->
<!-- Material form register -->
<div class="card" id="reg">

    <h5 class="card-header primary-color white-text text-center py-4">
        <strong>Edit Interior Experience</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

		@foreach($interiorExp as $ie)
        <!-- Form -->
        <form class="text-center md-form" id="upload" style="color: #757575;" action="/admin/updateInteriorExp" method="post" enctype="multipart/form-data">
					{{ csrf_field() }}
					<input type="hidden" name="id" value="{{ $ie->id }}"><br>
                    <!-- First name -->
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormJudul" class="form-control" name="judul" value="{{$ie->judul}}">
                        <label for="materialRegisterFormJudul">Judul</label>
                    </div>
                    <div class="md-form mt-0">
                <select class="mdb-select md-form" name="author">
				  <option value="" disabled selected>Author</option>
				  @foreach($author as $penulis)
				  @if($ie->id_author = $penulis->id)
					<option value="{{$penulis->id}}" selected>{{$penulis->name}}</option>
					@else
						<option value="{{$penulis->id}}">{{$penulis->name}}</option>
					@endif
				  @endforeach
				</select>
            </div>
            

            <!-- E-mail -->
            <div class="md-form mt-0">
                <textarea id="form7" class="md-textarea form-control" rows="20" name="isi">{{$ie->isi}}</textarea>
  <label for="form7">Isi</label>
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