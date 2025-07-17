@extends('layouts.app')

@section('content')
    <h2 class="mb-4">Daftar Artikel</h2>
    @foreach ($articles as $article)
        <div class="card mb-3">
            <div class="card-body">
                <h5>{{ $article->title }}</h5>
                <p>{{ Str::limit($article->content, 100) }}</p>
                <p><strong>Kategori:</strong> {{ $article->category->name ?? '-' }}</p>
                <div class="d-flex justify-content-between">
                    <a href="{{ route('articles.edit', $article) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('likes.store', $article->id) }}" method="POST">
    @csrf
    <button type="submit">❤️ Like ({{ $article->likes->count() }})</button>
</form>

                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection
