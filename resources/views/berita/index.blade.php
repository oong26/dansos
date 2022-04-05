@extends('layouts.template')
@section('slider')
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
            <div class="col-lg-12">
                <form action="{{ route('berita.index') }}" method="get">
                    <input type="text" name="q" id="q" class="form-control" placeholder="Cari judul berita disini...">
                </form>
            </div>
        </div>
        <div class="row mt-2">
          @foreach ($artikel as $item)
          <div class="col-lg-6">
              <div class="card shadow-sm p-3 mb-5 bg-white rounded" style="border: none;">
                  <img class="card-img-top img-fluid" style="height: 400px;" src="{{ 'http://127.0.0.1:8000/upload/artikel/'.$item->cover }}" alt="Card image cap">
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
