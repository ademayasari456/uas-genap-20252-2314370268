@extends('layouts.app')

@section('content')
    <div class="text-center py-5">
        <h1 class="display-4">Selamat datang di TikelPik</h1>
        <p class="lead">Berbagi Artikel, Menyebar Inspirasi</p>
        <a href="{{ route('articles.index') }}" class="btn btn-primary btn-lg">Lihat Artikel</a>
    </div>
@endsection
