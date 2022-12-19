@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Hi! <b>{{ auth()->user()->name }}</b>, ingin Tambah Barang?</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
    </div>

    <div class="col-lg-8">
        <form method="post" action="/dashboard/barangs/" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="category" class="form-label">Kategori Barang</label>
                <select class="form-select" name="category_id">
                    @foreach ($categories as $category)
                        @if (old('category_id') == $category->id)
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="user_id" name="user_id" hidden
                    value="{{ auth()->user()->id }}" value="{{ old('user_id') }}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Barang</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
                    required autofocus value="{{ old('nama') }}">
                @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug Barang</label>
                <input type="text" class="form-control" id="slug" name="slug" readonly placeholder="Otomatis"
                    required value="{{ old('slug') }}">
            </div>
            {{-- <div class="mb-3">
                <label for="kondisi" class="form-label">Kondisi Barang</label>
                <input id="kondisi" type="hidden" name="kondisi" placeholder="Baru/Bekas" value="{{ old('kondisi') }}">
                <trix-editor input="kondisi"></trix-editor>
                @error('kondisi')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div> --}}
            <div class="mb-3">
                <label for="kondisi" class="form-label">Kondisi Barang</label>
                <textarea class="form-control @error('kondisi') is-invalid @enderror" id="kondisi" name="kondisi" rows="3"
                    required autofocus value="{{ old('kondisi') }}" placeholder="Baru/Bekas"></textarea>
                @error('kondisi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            {{-- <div class="mb-3">
                <label for="spesifikasi" class="form-label">Spesifikasi
                    Barang</label>
                <input id="spesifikasi" type="hidden" name="spesifikasi" value="{{ old('spesifikasi') }}">
                <trix-editor input="spesifikasi"></trix-editor>
                @error('spesifikasi')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div> --}}
            <div class="mb-3">
                <label for="spesifikasi" class="form-label">Spesifikasi Barang</label>
                <textarea class="form-control @error('spesifikasi') is-invalid @enderror" id="spesifikasi" name="spesifikasi"
                    rows="3" required autofocus value="{{ old('spesifikasi') }}"></textarea>
                @error('spesifikasi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            {{-- <div class="mb-3">
                <label for="lokasi" class="form-label">Lokasi Barang</label>
                <input id="lokasi" type="hidden" name="lokasi" value="{{ old('lokasi') }}">
                <trix-editor input="lokasi"></trix-editor>
                @error('lokasi')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div> --}}
            <div class="mb-3">
                <label for="lokasi" class="form-label">Lokasi Barang</label>
                <textarea class="form-control @error('lokasi') is-invalid @enderror" id="lokasi" name="lokasi" rows="3"
                    required autofocus value="{{ old('lokasi') }}" placeholder="*lebih lengkap lebih baik"></textarea>
                @error('lokasi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="harga_jual" class="form-label">Harga Jual
                    Barang</label>
                <input type="number" class="form-control @error('harga_jual') is-invalid @enderror" id="harga_jual"
                    name="harga_jual" placeholder="Contoh: 5000" required value="{{ old('harga_jual') }}">
                @error('harga_jual')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            {{-- <div class="mb-3">
                <label for="minus" class="form-label">Minus Barang</label>
                <input id="minus" type="hidden" name="minus" value="{{ old('minus') }}">
                <trix-editor input="minus"></trix-editor>
                @error('minus')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div> --}}
            <div class="mb-3">
                <label for="minus" class="form-label">Minus Barang</label>
                <textarea class="form-control @error('minus') is-invalid @enderror" id="minus" name="minus" rows="3"
                    required autofocus value="{{ old('minus') }}"></textarea>
                @error('minus')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="CP" class="form-label">CP (Contact Person)
                    Barang</label>
                <input type="text" class="form-control @error('CP') is-invalid @enderror" id="CP" name="CP"
                    placeholder="Contoh: 081359*****0 (WA) / @mel*****6 (IG) / DLL" required value="{{ old('CP') }}">
                @error('CP')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="status" name="status" hidden value="Belum di Posting"
                    value="{{ old('status') }}">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Gambar Barang</label>
                <img class="img-preview img-fluid mb-3 col-sm-2">
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                    name="image" onchange="previewImage()">
            </div>
            @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            <button type="submit" class="btn btn-primary">Tambah Barang</button>
        </form>
    </div>

    <script>
        const nama = document.querySelector('#nama');
        const slug = document.querySelector('#slug');

        nama.addEventListener('change', function() {
            fetch('/dashboard/barangs/checkSlug?nama=' + nama.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        });

        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
