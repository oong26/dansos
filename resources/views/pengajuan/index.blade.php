@extends('layouts.template')
@push('custom-css')

@endpush
@section('content')
<div class="choose-us-area pt-70 pb-70" id="page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mb-70">
                <div class="section-title">
                    <h4>Pengaduan</h4>
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
                       <form action="{{ route('pengajuan.store') }}" method="POST" >
                        @csrf
                           <div class="row">
                               <div class="form-group col-md-12">
                                    <label for="">NIK <small class="text-danger">*</small></label>
                                    <input type="text" name="nik" id="" class="form-control">
                                    @error('nik')
                                        <small class="text-danger">
                                        {{ $message }}
                                        </small>
                                    @enderror
                               </div>
                               <div class="form-group col-md-12">
                                    <label for="">Nama Lengkap <small class="text-danger">*</small></label>
                                    <input type="text" name="nama" id="" class="form-control @error('nama') is-invalid @enderror">
                                    @error('nama')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="">No. HP <small class="text-danger">*</small></label>
                                    <input type="text" name="no_hp" id="" class="form-control @error('no_hp') is-invalid @enderror">
                                    <small id="emailHelp" class="form-text text-muted">contoh : 08xxxx</small>
                                    @error('no_hp')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="">Perihal</label>
                                    <textarea name="perihal" id="" cols="30" rows="4" class="form-control"></textarea>
                                    @error('perihal')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="reset" class="btn btn-outline-danger px-4 mx-2">Batal</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
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
