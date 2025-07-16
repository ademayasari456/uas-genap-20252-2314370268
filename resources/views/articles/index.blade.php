@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6">

    <!-- Header dan Tombol Tambah -->
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Daftar Artikel</h1>
        <a href="{{ route('articles.create') }}"
           class="inline-flex items-center px-4 py-2 bg-[#F53003] text-white text-sm font-medium rounded-lg hover:bg-red-600 transition-colors duration-200">
            <i class="fas fa-plus mr-2"></i> Tambah Artikel
        </a>
    </div>

    @if(session('success'))
    <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">
        {{ session('success') }}
    </div>
@endif

@if($errors->any())
    <div class="mb-4 p-4 bg-red-100 text-red-800 rounded">
        <ul class="list-disc list-inside">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <!-- Tabel Artikel -->
    <div class="overflow-x-auto bg-white rounded-lg shadow-md">
        <table class="min-w-full divide-y divide-gray-200 text-sm">
            <thead class="bg-gray-100">
                <tr>
                    <th class="text-left px-4 py-3 font-medium text-gray-700">Judul</th>
                    <th class="text-left px-4 py-3 font-medium text-gray-700">Kategori</th>
                    <th class="text-left px-4 py-3 font-medium text-gray-700">Status</th>
                    <th class="text-left px-4 py-3 font-medium text-gray-700">Komentar</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse($articles as $article)
                <tr class="hover:bg-gray-50 transition duration-300">
                    <!-- Judul Artikel -->
                    <td class="px-4 py-3 font-semibold text-gray-800">
                        {{ $article->title }}
                    </td>

                    <!-- Kategori -->
                    <td class="px-4 py-3 text-gray-600">
                        {{ $article->category->name ?? '-' }}
                    </td>

                    <!-- Status -->
                    <td class="px-4 py-3">
                        @if($article->is_publish)
                            <span class="inline-block px-2 py-1 text-xs font-semibold text-green-700 bg-green-100 rounded-full">Published</span>
                        @else
                            <span class="inline-block px-2 py-1 text-xs font-semibold text-yellow-700 bg-yellow-100 rounded-full">Draft</span>
                        @endif
                    </td>

                    <!-- Komentar -->
                    <td class="px-4 py-3">
                        @if($article->comments->count())
                        <ul class="list-disc list-inside space-y-1 text-gray-600">
                            @foreach($article->comments as $comment)
                                <li class="text-sm italic">"{{ \Illuminate\Support\Str::limit($comment->content, 80) }}"</li>
                            @endforeach
                        </ul>
                        @else
                            <span class="text-gray-400 italic">Tidak ada komentar</span>
                        @endif
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="px-4 py-4 text-center text-gray-500 italic">Belum ada artikel.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
