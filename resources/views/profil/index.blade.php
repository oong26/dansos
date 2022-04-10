@extends('layouts.template')
@push('custom-css')

@endpush
@section('content')
<div class="choose-us-area pt-70 pb-70" id="page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mb-70">
                <div class="section-title">
                    <h4>Profil</h4>
                </div>
            </div>
        </div>
        <div class="row">
           <div class="col-md-7 mx-auto">
                @if (session('status'))
                    <div class="alert alert-primary background-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="icofont icofont-close-line-circled text-white"></i>
                        </button>
                        <strong>{{ session('status') }}</strong>
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger background-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="icofont icofont-close-line-circled text-white"></i>
                        </button>
                        <strong>{{ session('error') }}</strong>
                    </div>
                @endif
               <div class="card">
                   <div class="card-body">
                           <div class="row">
                               <div class="form-group col-md-12">
                                    <label for="">NIK</label>
                                    <input type="text" name="nik" id="" value="{{ $user->nik }}" class="form-control" readonly>
                                    @error('nik')
                                        <small class="text-danger">
                                        {{ $message }}
                                        </small>
                                    @enderror
                               </div>
                               <div class="form-group col-md-12">
                                    <label for="">Nama Lengkap</label>
                                    <input type="text" name="nama" value="{{ $user->nama }}" id="" class="form-control @error('nama') is-invalid @enderror" readonly>
                                    @error('nama')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="">No. HP </label>
                                    <input type="text" name="no_hp" value="{{ $user->no_hp }}" id="" class="form-control @error('no_hp') is-invalid @enderror" readonly>
                                    @error('no_hp')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="">Alamat</label>
                                    <input type="text" name="no_hp" value="{{ $user->alamat }}" id="" class="form-control @error('no_hp') is-invalid @enderror" readonly>
                                    @error('no_hp')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="">Jenis Kelamin</label>
                                    <input type="text" name="no_hp" value="{{ $user->jenis_kelamin }}" id="" class="form-control @error('no_hp') is-invalid @enderror" readonly>
                                    @error('no_hp')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="">Tanggal Lahir</label>
                                    <input type="date" name="no_hp" value="{{ $user->tanggal_lahir }}" id="" class="form-control @error('no_hp') is-invalid @enderror" readonly>
                                    @error('no_hp')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>

                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="{{ route('profil.edit',$user->nik) }}" class="btn btn-info text-white">Edit Profil</a>
                            </div>
                   </div>
               </div>
           </div>

        </div>
    </div>
</div>
@endsection
@push('custom-js')

@endpush
