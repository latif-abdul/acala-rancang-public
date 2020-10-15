@extends('master')

@section('title', 'Detail Interior Experience')

@section('konten')

	      <section class="section mt-5 pb-3 wow fadeIn">
@foreach($interiorExp as $ie)
        <!--Grid row-->
        <div class="row">
          <div class="col-md-12">
            <!-- Card -->
            <div class="card card-cascade wider reverse">

              <!-- Card image -->
              <div class="view view-cascade overlay">
                <img class="card-img-top" src="{{asset('uploads')}}/{{$ie->gambar}}" alt="Card image cap">
                <a href="#!">
                  <div class="mask rgba-white-slight waves-effect waves-light"></div>
                </a>
              </div>

              <!--Post data-->
              <div class="card-body card-body-cascade text-center">
                <h2><a><strong>{{$ie->judul}}</strong></a></h2>
                <p>Written by <a>{{$ie->name}}</a></p>

                <!--Social shares-->
                

              </div>
              <!--Post data-->
            </div>

            <!--Excerpt-->
            <div class="excerpt mt-5 wow fadeIn" data-wow-delay="0.3s">
			{{$ie->isi}}


             
            </div>
          </div>
        </div>
        <!--Grid row-->
@endforeach
      </section>

@endsection