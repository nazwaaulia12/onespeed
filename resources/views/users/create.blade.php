@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <form action="{{ route('customer.store') }}" method="POST" id="kt_create_pengeluaran">
        @csrf
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-5">
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label required" for="nama">Nama User</label>
                                    <input type="text" class="form-control form-control-solid" name="namaUom" value="{{ old('namaUom') }}">
                                    @include('layouts.error', ['name' => 'namaUom'])
                                </div>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="text" class="form-control form-control-solid" name="email" value="{{ old('email') }}">
                                    @include('layouts.error', ['name' => 'email'])
                                </div>
                            </div>
                        </div>
                        <div class="mb-10 fv-row" data-kt-password-meter="true">
                        <!--begin::Wrapper-->
                        <div class="mb-1">
                            <!--begin::Label-->
                            <label class="form-label fw-bolder text-dark fs-6">Password</label>
                            <!--end::Label-->
                            <!--begin::Input wrapper-->
                            <div class="position-relative mb-3">
                                <input id="password" type="password"
                                    class="form-control form-control-lg form-control-solid @error('password') is-invalid @enderror"
                                    name="password" required autocomplete="off">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                    data-kt-password-meter-control="visibility">
                                    <i class="bi bi-eye-slash fs-2"></i>
                                    <i class="bi bi-eye fs-2 d-none"></i>
                                </span>
                            </div>
                            <!--end::Input wrapper-->
                            <!--begin::Meter-->
                            <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                            </div>
                            <!--end::Meter-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Hint-->
                        <div class="text-muted">Use 8 or more characters with a mix of letters, numbers &amp; symbols.
                        </div>
                        <!--end::Hint-->
                        </div>
                            <div class="fv-row mb-5">
                            <label class="form-label fw-bolder text-dark fs-6">Confirm Password</label>
                            <input id="password-confirm" type="password" class="form-control form-control-lg form-control-solid"
                            name="password_confirmation" required autocomplete="new-password">
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                <label for="exampleInputlevel">Level</label>
                                <select class="form-control @error('level') is-invalid @enderror" id="exampleInputlevel"
                                    name="level" data-control="select2">
                                    <option value="Apoteker" @if(old('level')=='Apoteker' )selected @endif>Apoteker</option>
                                    <option value="Gudang" @if(old('gudang')=='Gudang' )selected @endif>Gudang</option>
                                    <option value="Kasir" @if(old('level')=='Kasir' )selected @endif>Kasir</option>
                                    <option value="Pemilik" @if(old('level')=='Pemilik' )selected @endif>Pemilik</option>
                                </select>
                                @error('level') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex d-flex justify-content-end">
                        <button type="button" class="btn btn-light me-5" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

@section('onpage-js')
@endsection
