@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto p-6 bg-white rounded-lg shadow-md">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Tambah Artikel Baru</h2>

@if($errors->any())
    <div class="mb-4 p-4 bg-red-100 text-red-800 rounded">
        <ul class="list-disc list-inside">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form action="{{ route('articles.store') }}" method="POST">
        @csrf

        <!-- Judul -->
        <div class="mb-4">
            <label for="title" class="block mb-2 font-medium text-gray-700">Judul Artikel</label>
            <input type="text" name="title" id="title" required
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-[#F53003] focus:border-[#F53003]">
        </div>

        <!-- Konten -->
        <div class="mb-4">
            <label for="content" class="block mb-2 font-medium text-gray-700">Konten Artikel</label>
            <textarea name="content" id="content" rows="5" required
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-[#F53003] focus:border-[#F53003]"></textarea>
        </div>

        <!-- Kategori -->
        <div class="mb-4">
            <label for="category_id" class="block mb-2 font-medium text-gray-700">Kategori</label>
            <select name="category_id" id="category_id" required
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-[#F53003] focus:border-[#F53003]">
                <option value="">-- Pilih Kategori --</option>
                <option value="">-- Pilih Kategori --</option>
                <option value="1">Pendidikan</option>
                <option value="2">Ekonomi</option>
                <option value="3">Sains</option>
                <option value="4">Bahasa Inggris</option>
                <option value="5">Kesehatan</option>
            </select>
        </div>

        <!-- Status Publish -->
        <div class="mb-4">
            <label class="block mb-2 font-medium text-gray-700">Status</label>
            <div class="flex items-center gap-6">
                <label class="inline-flex items-center">
                    <input type="radio" name="is_publish" value="1" class="text-[#F53003] focus:ring-[#F53003]" checked>
                    <span class="ml-2 text-gray-700">Published</span>
                </label>
                <label class="inline-flex items-center">
                    <input type="radio" name="is_publish" value="0" class="text-[#F53003] focus:ring-[#F53003]">
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
                Simpan Artikel
            </button>
        </div>
    </form>
</div>

        <div class="mb-4">
    <label for="comment" class="block mb-2 font-medium text-gray-700">Komentar Awal (opsional)</label>
    <textarea name="comment" id="comment" rows="3"
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-[#F53003] focus:border-[#F53003]"></textarea>
</div>

@endsection
