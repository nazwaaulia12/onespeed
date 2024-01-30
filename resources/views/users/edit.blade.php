@extends('layouts.app')

    @section('content')
    <div class="container-fluid">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                @include('layouts.flash-error',[ 'message'=> $error ])
            @endforeach
        @endif
        
        <form action="{{ route('users.update', $user) }}" method="POST" id="kt_create_pengeluaran">
            @csrf
            <input type="hidden" name="id" value="{{ $user->id }}">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-5">
                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-label required" for="nama">Nama User</label>
                                        <input type="text" class="form-control form-control-solid" name="name" value="{{ old('name', $user->name) }}" min="0">
                                        @include('layouts.error', ['name' => 'name'])
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col">
                                    <div class="form-group">
                                        <label class="form-label required" for="email">Email</label>
                                        <input type="email" class="form-control form-control-solid" name="email" value="{{ old('name', $user->email) }}" min="0">
                                        @include('layouts.error', ['name' => 'email'])
                                    </div>
                                </div>
                        </div>
                        <div class="row" data-kt-password-meter="true"> 
                                <div class="col"> 
                                    <div class="form-group"> 
                                        <!--begin::Label--> 
                                        <label class="form-label text-dark fs-6">Password</label> 
                                        <!--end::Label--> 
                                        <!--begin::Input wrapper--> 
                                        <div class="position-relative mb-3"> 
                                            <input id="password" type="password" 
                                                class="form-control form-control-lg form-control-solid @error('password') is-invalid @enderror" 
                                                name="password" required autocomplete="off" value=""> 
 
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
                                    <!--begin::Hint--> 
                                    <div class="text-muted">Use 8 or more characters with a mix of letters, numbers &amp; symbols. 
                                    </div> 
                                    <!--end::Hint--> 
                                </div> 
                            </div> 
                            <div class="fv-row mb-5"> 
                                <div class="col"> 
                                    <div class="form-group"> 
                                    <label class="form-label text-dark fs-6">Confirm Password</label> 
                                    <input id="password-confirm" type="password" class="form-control form-control-lg form-control-solid" 
                                        name="password_confirmation" required autocomplete="new-password" value=""> 
                                    </div> 
                                </div> 
                            </div>
                        <div class="row mb-5">
                                <div class="col">
                                    <div class="form-group">
                                    <label class="form-label fw-bolder text-dark fs-6" for="level">Level</label> 
                                        <select class="form-control @error('level') isinvalid @enderror" id="level" 
                                        name="level" aria-label="Pilih Level" data-control="select2" data-placeholder="Pilih Level">
                                        <option value="">Pilih Jabatan...</option> 
                                        <option value="admin" @if ($user->level == 'Apoteker' || old('level') == 'Apoteker') selected @endif>Apoteker</option> 
                                        <option value="operator" @if ($user->level == 'Gudang' || old('level') == 'Gudang') selected @endif>Gudang</option> 
                                        <option value="pelanggan" @if ($user->level == 'Kasir' || old('level') == 'Kasir') selected @endif>Kasir</option> 
                                        <option value="pemilik" @if ($user->level == 'pemilik' || old('level') == 'pemilik') selected @endif>Pemilik</option>
                                        </select>
                                        @error('level') <span class="textdanger">{{$message}}</span> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex d-flex justify-content-end">
                            <a href="{{ route('users.index') }}" class="btn btn-light me-5">Batal</a>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
    @endsection
    
    @section('onpage-js')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    @if(Session::has('errorTransaksi'))
    <script>
        toastr.error(
            'Data tidak valid'
        )

    </script>
    @endif

    @if(Session::has('success'))
    <script>
        toastr.success(
            'Data berhasil di perbaharui'
        )

    </script>
    @endif
    @endsection
