@extends('layouts.app')

@section('content')
    <h2 class="mb-4">Tambah Artikel Baru</h2>
    <form action="{{ route('articles.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Konten</label>
            <textarea name="content" rows="5" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label>Kategori</label>
            <select name="category_id" class="form-control" required>
                <option value="">-- Pilih Kategori --</option>
                @foreach ($categories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-check mb-3">
            <input type="checkbox" name="is_publish" class="form-check-input" value="1">
            <label class="form-check-label">Publikasikan sekarang</label>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
