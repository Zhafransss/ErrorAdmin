@extends('layouts.backend.master')
@section('title')
    Daftar Tiket
@endsection

@section('content')
    
        
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>@yield('title')</h4>
                </div>
                <div class="card-body">
                    <form action="" method="GET">
                        <div class="row g-3 align-items-center">
                            <div class="col-md-9">
                                <label for="cari" class="form-label">Cari Kata Kunci</label>
                                <input type="text" name="cari" class="form-control" autocomplete="off" id="cari">
                            </div>
                            
                            <div class="col-md-3">
                                <div class="mt-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="bi bi-search"></i> Search
                                    </button>
                                    <button onClick="window.location.reload()" class="btn btn-danger">
                                        <i class="bi bi-arrow-clockwise"></i> Reload
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- Table with outer spacing -->
                    <div class="table-responsive">
                        <table class="table table-lg">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>Nomor HP</th>
                                    <th>Alamat</th>
                                    <th>Tanggal</th>
                                    <th>Asal</th>
                                    <th>Tujuan</th>
                                    <th>Pembayaran</th>
                                    <th>Kendaraan</th>
                                    <th>ACTION</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-bold-500">{{ $item->nama }}</td>
                                        <td class="text-bold-500">{{ $item->nomor_hp }}</td>
                                        <td class="text-bold-500">{{ $item->alamat }}</td>
                                        <td class="text-bold-500">{{ $item->tanggal }}</td>
                                        <td class="text-bold-500">{{ $item->asal }}</td>
                                        <td class="text-bold-500">{{ $item->tujuan }}</td>
                                        <td class="text-bold-500">{{ $item->pembayaran }}</td>
                                        <td class="text-bold-500">{{ $item->kendaraan }}</td>
                                       
                                        <td class="text-bold-500 d-flex">
                                            <a href="{{ route('product.edit', $item->id) }}"
                                                class="btn icon btn-primary me-2"><i class="bi bi-pencil"></i></a>
                                            <form action="{{ route('product.destroy', $item->id) }}" method="POST">
                                                @csrf @method('DELETE')
                                                <button type="submit" class="btn icon btn-danger"><i
                                                        class="bi bi-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
