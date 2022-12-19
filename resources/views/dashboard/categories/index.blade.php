@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Kategori (Admin : <b>{{ auth()->user()->name }})</b></h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-11" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive col-lg-11">

        <a href="/dashboard/categories/create" class="btn btn-primary mb-3">Tambah Kategori</a>

        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Waktu di Upload</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->created_at }}</td>
                        <td>
                            <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-warning">
                                <span data-feather="edit"></span>
                            </a>
                            <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Apakah Anda yakin akan menghapus data?')"><span data-feather="x-circle"></span></button>
                            </form>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
