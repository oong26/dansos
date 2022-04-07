@extends('layouts.template')
@section('slider')
@endsection
@section('content')
<div class="choose-us-area pt-70 pb-70" id="page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mb-70">
                <div class="section-title">
                    <h4>Riwayat</h4>
                </div>
            </div>
        </div>
        {{--  <div class="row">
            <div class="col-lg-12">
                <form action="{{ route('riwayat.index') }}" method="get">
                    <input type="text" name="q" id="q" class="form-control" placeholder="Cari disini...">
                </form>
            </div>
        </div>  --}}
        <div class="row mt-2">
          <div class="table-responsive">
              <table class="table">
                  <thead>
                      <tr>
                          <th class="text-center">#</th>
                          <th class="text-center">Tanggal</th>
                          <th class="text-center">Diterima pada</th>
                          <th class="text-center">Status</th>
                          <th class="text-center">Nominal</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-center">{{ $item->tanggal }}</td>
                        <td class="text-center">{{ $item->status == 1 ? '-' : $item->created_at }}</td>
                        <td class="text-center">{{ $item->status == 1 ? 'Sedang diproses' : 'Selesai' }}</td>
                        <td class="text-right">Rp. {{ number_format($item->nominal, 0, ',', '.') }}</td>
                    </tr>
                    @endforeach
                  </tbody>
              </table>
          </div>
        </div>
    </div>
</div>
@endsection
