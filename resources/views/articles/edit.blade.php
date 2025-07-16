@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto p-6 bg-white rounded-lg shadow-md">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Edit Artikel</h2>

    {{-- Notifikasi error validasi --}}
    @if($errors->any())
        <div class="mb-4 p-4 bg-red-100 text-red-800 rounded">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('articles.update', $article->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Judul -->
        <div class="mb-4">
            <label for="title" class="block mb-2 font-medium text-gray-700">Judul Artikel</label>
            <input type="text" name="title" id="title" required
                value="{{ old('title', $article->title) }}"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-[#F53003] focus:border-[#F53003]">
        </div>

        <!-- Konten -->
        <div class="mb-4">
            <label for="content" class="block mb-2 font-medium text-gray-700">Konten Artikel</label>
            <textarea name="content" id="content" rows="5" required
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-[#F53003] focus:border-[#F53003]">{{ old('content', $article->content) }}</textarea>
        </div>

        <!-- Kategori -->
        <div class="mb-4">
            <label for="category_id" class="block mb-2 font-medium text-gray-700">Kategori</label>
            <select name="category_id" id="category_id" required
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-[#F53003] focus:border-[#F53003]">
                <option value="">-- Pilih Kategori --</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $article->category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Status -->
        <div class="mb-4">
            <label class="block mb-2 font-medium text-gray-700">Status</label>
            <div class="flex items-center gap-6">
                <label class="inline-flex items-center">
                    <input type="radio" name="is_publish" value="1" {{ $article->is_publish ? 'checked' : '' }}
                        class="text-[#F53003] focus:ring-[#F53003]">
                    <span class="ml-2 text-gray-700">Published</span>
                </label>
                <label class="inline-flex items-center">
                    <input type="radio" name="is_publish" value="0" {{ !$article->is_publish ? 'checked' : '' }}
                        class="text-[#F53003] focus:ring-[#F53003]">
                    <span class="ml-2 text-gray-700">Draft</span>
                </label>
            </div>
        </div>

        <!-- Tombol -->
        <div class="flex justify-end gap-4 mt-6">
            <a href="{{ route('articles.index') }}"
                class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-100">Batal</a>
            <button type="submit"
                class="px-5 py-2 bg-[#F53003] text-white rounded-lg hover:bg-red-600 transition-colors duration-200">
                Update Artikel
            </button>
        </div>
    </form>
</div>
@endsection
