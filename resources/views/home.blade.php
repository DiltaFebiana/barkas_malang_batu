@extends('layouts.main')

@section('container')
    <div class="container">
        <h1 class="text-center mb-3">{{ $title }}</h1>

        <div class="row justify-content-center mb-3">
            <div class="col-md-6">
                <form action="/">
                    @if (request('category'))
                        <input type="hidden" name="category", value="{{ request('category') }}">
                    @endif
                    @if (request('user'))
                        <input type="hidden" name="user", value="{{ request('user') }}">
                    @endif
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search.." name="search"
                            value="{{ request('search') }}">
                        <button class="btn btn-outline-secondary" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>

        @if ($barangs->count())
            <div class="row">
                @foreach ($barangs as $barang)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="position-absolute px-3 py-2" style="background-color: rgba(0,0,0, 0.7)">
                                <a href="/?category={{ $barang->category->slug }}"
                                    class="text-white text-decoration-none">{{ $barang->category->name }}</a>
                            </div>

                            @if ($barang->image)
                                <img src="{{ asset('storage/' . $barang->image) }}" class="card-img-top" alt="">
                            @else
                                <img src="https://source.unsplash.com/500x400?{{ $barang->category->name }}"
                                    class="card-img-top" alt="{{ $barang->category->name }}">
                            @endif

                            <div class="card-body">
                                <h5 class="card-title">Pemilik: <a href="/?user={{ $barang->user->username }}"
                                        class="text-decoration-none">{{ $barang->user->name }} </a></h5>
                                <p class="card-text">
                                    Nama Barang : {{ $barang['nama'] }} <br>
                                    Kondisi (Baru/Bekas) : {{ $barang['kondisi'] }} <br>
                                    Spesifikasi : {{ $barang['spesifikasi'] }} <br>
                                    Lokasi : {{ $barang['lokasi'] }} <br>
                                    Harga Jual : {{ $barang['harga_jual'] }} <br>
                                    Minus : {{ $barang['minus'] }} <br>
                                    CP : {{ $barang['CP'] }} <br>
                                    <small class="text-muted">
                                        {{ $barang->created_at->diffForHumans() }}
                                    </small>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    </div>
@else
    <p class="text-center fs-4">Tidak ada barang ditemukan.</p>
    @endif

    <div class="d-flex justify-content-end">
        {{ $barangs->links() }}
    </div>

@endsection
