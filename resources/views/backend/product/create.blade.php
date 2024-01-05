@extends('layouts.backend.master')
@section('title')
    Tambah Tiket Baru
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>@yield('title')</h4>
                </div>
                <div class="card-body">
                    <form class="form" action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="col-md-7">
                                <div class="mb-3">
                                    <label class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                        name="nama" value="{{ old('nama') }}" autocomplete="off">
                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">No HP</label>
                                    <input type="number" class="form-control @error('nomor_hp') is-invalid @enderror"
                                        name="nomor_hp" value="{{ old('nomor_hp') }}" autocomplete="off">
                                    @error('nomor_hp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label">Alamat</label>
                                    <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                                        name="alamat" value="{{ old('alamat') }}" autocomplete="off">
                                    @error('alamat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Tanggal</label>
                                    <input type="date" class="form-control @error('tanggal') is-invalid @enderror"
                                        name="tanggal" value="{{ old('tanggal') }}" autocomplete="off">
                                    @error('tanggal')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Pilih Kota Asal</label>
                                    <fieldset class="form-group">
                                        <select class="form-select @error('asal') is-invalid @enderror" id="basicSelect"
                                            name="asal">
                                            <option value="">-- Pilih --</option>
                                            <option {{ old('asal') == 'Semarang' ? 'selected' : '' }} value="Semarang">
                                                Semarang</option>
                                            <option {{ old('asal') == 'Purwokerto' ? 'selected' : '' }} value="Purwokerto">Purwokerto</option>
                                        </select>
                                        @error('asal')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </fieldset>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Pilih Kota Tujuan</label>
                                    <fieldset class="form-group">
                                        <select class="form-select @error('tujuan') is-invalid @enderror" id="basicSelect"
                                            name="tujuan">
                                            <option value="">-- Pilih --</option>
                                            <option {{ old('tujuan') == 'Jogja' ? 'selected' : '' }} value="Jogja">
                                                Jogja</option>
                                            <option {{ old('tujuan') == 'Solo' ? 'selected' : '' }} value="Solo">Solo
                                            </option>
                                        </select>
                                        @error('tujuan')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </fieldset>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Pilih Pembayaran</label>
                                    <fieldset class="form-group">
                                        <select class="form-select @error('pembayaran') is-invalid @enderror" id="basicSelect"
                                            name="pembayaran">
                                            <option value="">-- Pilih --</option>
                                            <option {{ old('pembayaran') == 'Dana' ? 'selected' : '' }} value="Dana">
                                                Dana</option>
                                            <option {{ old('pembayaran') == 'Transfek_Bank_BRI' ? 'selected' : '' }} value="Transfek_Bank_BRI">Transfer Bank BRI
                                            </option>
                                        </select>
                                        @error('pembayaran')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </fieldset>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Pilih Kendaraan</label>
                                    <fieldset class="form-group">
                                        <select class="form-select @error('kendaraan') is-invalid @enderror" id="basicSelect"
                                            name="kendaraan">
                                            <option value="">-- Pilih --</option>
                                            <option {{ old('kendaraan') == 'Innova_Reborn' ? 'selected' : '' }} value="Innova_Reborn">
                                                Innova Reborn</option>
                                            <option {{ old('kendaraan') == 'elf' ? 'selected' : '' }} value="Elf">Elf
                                            </option>
                                        </select>
                                        @error('kendaraan')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </fieldset>
                                </div>
                               
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/extensions/filepond/filepond.css ') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/extensions/filepond-plugin-image-preview/filepond-plugin-image-preview.css ') }}">
    <link rel="stylesheet" href="{{ asset('assets/extensions/toastify-js/src/toastify.css ') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pages/filepond.css ') }}">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
@endsection

@section('scripts')
    <script src="{{ asset('assets/extensions/filepond/filepond.js') }}"></script>
    <script src="{{ asset('assets/extensions/toastify-js/src/toastify.js') }}"></script>
    <script src="{{ asset('assets/js/pages/filepond.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
        imgInp.onchange = evt => {
            const [file] = imgInp.files
            if (file) {
                blah.src = URL.createObjectURL(file)
            }
        }
    </script>
    <script>
        $('#summernote').summernote({
            placeholder: 'Masukan Deskripsi lengkap produk',
            tabsize: 2,
            height: 120,
            toolbar: [
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link']],
                ['view', ['codeview']]
            ]
        });
    </script>
@endsection
