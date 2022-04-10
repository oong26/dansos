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
                        <form action="{{ route('profil.update',$user->nik) }}" method="POST">
                        @csrf
                        @method('PUT')
                            <div class="row">
                                <div class="form-group col-md-12">
                                        <label for="">NIK</label>
                                        <input type="text" name="nik" id="" value="{{ $user->nik }}" class="form-control">
                                        @error('nik')
                                            <small class="text-danger">
                                            {{ $message }}
                                            </small>
                                        @enderror
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="">Nama Lengkap</label>
                                    <input type="text" name="nama" value="{{ $user->nama }}" id="" class="form-control @error('nama') is-invalid @enderror">
                                    @error('nama')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="">No. HP </label>
                                    <input type="text" name="no_hp" value="{{ $user->no_hp }}" id="" class="form-control @error('no_hp') is-invalid @enderror">
                                    @error('no_hp')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="">Alamat</label>
                                    <input type="text" name="alamat" value="{{ $user->alamat }}" id="" class="form-control @error('alamat') is-invalid @enderror">
                                    @error('alamat')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="">Jenis Kelamin</label><br>
                                    <input type="radio" name="jenis_kelamin" id="laki" value="Laki-laki" {{ $user->jenis_kelamin == 'Laki-laki' ? 'checked' : ''}} required>&nbsp;<label for="laki">Laki-laki</label>
                                    <input type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan" {{ $user->jenis_kelamin == 'Perempuan' ? 'checked' : ''}} required>&nbsp;<label for="perempuan">Perempuan</label>
                                    @error('jenis_kelamin')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="">Tanggal Lahir</label>
                                    <input type="date" name="tgl_lahir" value="{{ $user->tanggal_lahir }}" id="" class="form-control @error('tgl_lahir') is-invalid @enderror">
                                    @error('tgl_lahir')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-info text-white mx-2">Simpan</button>
                                <button type="reset" class="btn btn-outline-danger">Batal</button>
                            </div>
                        </form>
                   </div>
               </div>
           </div>

        </div>
    </div>
</div>
@endsection
@push('custom-js')

@endpush
