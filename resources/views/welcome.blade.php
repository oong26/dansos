@extends('layouts.template')
@push('custom-css')

@endpush
@section('slider')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block carousel-image" src="{{ asset('') }}public/assets/img/slide_02.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block slider-inner">
                <h1>Free MULTIPURPSE TEMPLATE</h1>
                <h5>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis n</h5>                                <a class="btn get-started-btn" href="#">Get Started</a>
        </div>
      </div>

    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
@endsection
@section('content')
<div class="choose-us-area pt-70 pb-70" id="page">
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center mb-70">
                <div class="section-title">
                    <h4>Berita</h4>
                </div>
            </div>
        </div>
        <div class="row">
          @php
            $artikel = \App\Models\Artikel::orderBy('created_at', 'DESC')->limit(4)->get();
          @endphp
          @foreach ($artikel as $item)
          <div class="col-lg-6">
              <div class="card shadow-sm p-3 mb-5 bg-white rounded" style="border: none;">
                  <img class="card-img-top img-fluid" style="height: 400px;" src="{{ 'https://administrator.dansos-sudinsos.com/upload/artikel/'.$item->cover }}" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">{{ ucwords($item->title) }}</h5>
                    <p class="card-text">{{ substr($item->konten, 0, 40) }}</p>
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('berita.detail', $item->slug) }}" class="btn btn-primary">Selengkapnya</a>
                    </div>
                  </div>
              </div>
          </div>
          @endforeach
        </div>
    </div>
</div>
@endsection
@push('custom-js')

@endpush
