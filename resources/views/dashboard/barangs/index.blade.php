@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Barang : <b>{{ auth()->user()->name }}</b></h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-11" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive col-lg-11">

        <a href="/dashboard/barangs/create" class="btn btn-primary mb-3">Tambah Barang</a>

        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Kategori</th>
                    {{-- nanti buat admin-side
                    <th scope="col">Pemilik</th> --}}
                    <th scope="col">Nama</th>
                    <th scope="col">Kondisi</th>
                    <th scope="col">Spesifikasi</th>
                    <th scope="col">Lokasi</th>
                    <th scope="col">Harga Jual</th>
                    <th scope="col">Minus</th>
                    <th scope="col">CP</th>
                    <th scope="col">Waktu di Upload</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($barangs as $barang)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $barang->category->name }}</td>
                        <td>{{ $barang->nama }}</td>
                        <td>{{ $barang->kondisi }}</td>
                        <td>{{ $barang->spesifikasi }}</td>
                        <td>{{ $barang->lokasi }}</td>
                        <td>{{ $barang->harga_jual }}</td>
                        <td>{{ $barang->minus }}</td>
                        <td>{{ $barang->CP }}</td>
                        <td>{{ $barang->created_at }}</td>
                        <td>{{ $barang->status }}</td>
                        <td>
                            <form action="/dashboard/barangs/{{ $barang->slug }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Apakah Anda yakin akan menghapus data?')"><span data-feather="x-circle"></span></button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
