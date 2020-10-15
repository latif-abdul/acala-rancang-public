@extends('master')

@section('title', 'Detail UMKM')

@section('konten')

	      <section class="section mt-5 pb-3 wow fadeIn">
@foreach($umkm as $u)
        <!--Grid row-->
        <div class="row">
          <div class="col-md-12">
            <!-- Card -->
            <div class="card card-cascade wider reverse">

              <!-- Card image -->
              <div class="view view-cascade overlay">
                <img class="card-img-top" src="{{asset('uploads')}}/{{$u->gambar}}" alt="Card image cap">
                <a href="#!">
                  <div class="mask rgba-white-slight waves-effect waves-light"></div>
                </a>
              </div>

              <!--Post data-->
              <div class="card-body card-body-cascade text-center">
                <h5 class="font-weight-bold dark-grey-text mb-3">
                <strong>{{$u->nama}}</strong>
              </h5>
              <div class="personal-sm pb-3">
                <a class="fb-ic pr-2" href="https://www.facebook.com/{{$u->facebook}}"><i class="fab fa-facebook-f mr-2"> </i></a>
                <a class="tw-ic pr-2" href="https://www.twitter.com/{{$u->twitter}}"><i class="fab fa-twitter mr-2"> </i></a>
				<a class="pr-2" href="https://www.instagram.com/{{$u->instagram}}"><i class="fab fa-instagram mr-2 pink-text"> </i></a>
              </div>

                <!--Social shares-->
                

              </div>
              <!--Post data-->
            </div>

            <!--Excerpt-->
            <div class="excerpt mt-5 wow fadeIn" data-wow-delay="0.3s">
			{{$u->bio}}


             
            </div>
          </div>
        </div>
        <!--Grid row-->
@endforeach
      </section>

@endsection