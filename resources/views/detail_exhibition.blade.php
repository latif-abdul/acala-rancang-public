@extends('master')
@section('title', 'Detail Exhibition')
@section('konten')
@foreach($exhibition as $exh)
<div class="modal-content">
	<div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">{{$exh->judul_exhibition}}</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-8">
            <!--Carousel Wrapper-->
            <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails"
              data-ride="carousel">
              <!--Slides-->
			  
              <div class="carousel-inner" role="listbox">
			  @foreach($gambar as $img)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                  <img class="d-block w-100"
                    src="{{asset('uploads')}}/{{$img->gambar}}"
                    alt="{{$img->id_gambar}}">
                </div>
				@endforeach
				
				<div class="carousel-item">
					<iframe width="100%" height="500px" src="{{$exh->video}}" 
					frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; 
					gyroscope; picture-in-picture" allowfullscreen="" alt="{{$exh->id_video}}">></iframe>
                </div>
				
              </div>
			  
              <!--/.Slides-->
              <!--Controls-->
              <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
              <!--/.Controls-->
              <ol class="carousel-indicators">
			  <?php $i = 0;?>
			  @foreach($gambar as $img)
                <li data-target="#carousel-thumb" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}">
                  <img src="{{asset('uploads')}}/{{$img->gambar}}" width="60">
                </li>
				<?php $i++;?>
				@endforeach
				@if($exh->video != null)
				<li data-target="#carousel-thumb" data-slide-to="$i" class="{{ $loop->first ? 'active' : '' }}">
                  <img src="{{asset('img/OIP.jpg')}}" width="60">
                </li>
				@endif
              </ol>
            </div>
            <!--/.Carousel Wrapper-->
          </div>
          <div class="col-lg-4">
		  <!--$account->getProfilePicUrl()-->
			<img src="" class="rounded-circle z-depth-0 float-left"
						alt="avatar image" height="70">
			<div class="row">
			<div class="col-md">
            <h5 class="h5 product-name float-left">
              <strong class="float-left">{{$exh->author}}</strong><br>
			  <span class="float-left">{{$exh->instansi}}<br></span><br>
				<small>
				<span class="grey-text">
                
				 <a href="https://instagram.com/{{$exh->ig_author}}"><i class="fab fa-instagram"></i>{{$exh->ig_author}}</a>
				</span>
                </small>   
            </h5>
			</div>
			</div>
			
			<div class="card">
				<div class="card-header">
				<h5 class="mb-0">
                      {{$exh->judul_exhibition}}
                 </h5>
				 </div>
				 <div class="card-body" align="left">
					{{$exh->desc}}
				 </div>
			</div>
            <!--Accordion wrapper-->
          </div>
        </div>
      </div>
    </div>
	@endforeach
