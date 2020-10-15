@extends('master')

@section('title', 'Detail Author')

@section('konten')
<section>
@foreach($author as $penulis)
		<br><br>
        <div class="jumbotron p-5 text-center text-md-left author-box wow fadeIn" data-wow-delay="0.3s">
          <!--Name-->
          <h4 class="h3-responsive text-center font-weight-bold dark-grey-text">About author</h4>
          <hr>
          <div class="row">
            <!--Avatar-->
            <div class="col-12 col-md-2 mb-md-0 mb-4">
              <img src="{{asset('uploads')}}/{{$penulis->profile_picture}}" class="img-fluid rounded-circle z-depth-2">
            </div>
            <!--Author Data-->
            <div class="col-12 col-md-10">
              <h5 class="font-weight-bold dark-grey-text mb-3">
                <strong>{{$penulis->name}}</strong>
              </h5>
              <div class="personal-sm pb-3">
                <a class="fb-ic pr-2" href="www.facebook.com/{{$penulis->facebook}}"><i class="fab fa-facebook-f mr-2"> </i></a>
                <a class="tw-ic pr-2" href="www.twitter.com/{{$penulis->twitter}}"><i class="fab fa-twitter mr-2"> </i></a>
              </div>
              <p>{{$penulis->bio}}</p>
            </div>
          </div>
        </div>
@endforeach
      </section>