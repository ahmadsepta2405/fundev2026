@extends('layouts.app')

@section('content')
<h2 class="text-3xl font-bold mb-6">Pilih Kategori Servis</h2>
<div class="relative">
    <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">Pilih Kategori ▼</button>
    <div class="absolute mt-2 bg-white shadow-lg rounded hidden group-hover:block">
        <a href="/service/laptop" class="block px-4 py-2 hover:bg-gray-100">Laptop - Perbaikan hardware/software</a>
        <a href="/service/hp" class="block px-4 py-2 hover:bg-gray-100">HP - Upgrade baterai, layar</a>
        <a href="/service/komputer" class="block px-4 py-2 hover:bg-gray-100">Komputer - Optimasi performa</a>
    </div>
</div>
<!-- Form detail servis -->
<form class="mt-6 space-y-4">
    <input type="text" placeholder="Model Device" class="w-full p-2 border rounded focus:ring-2 focus:ring-blue-500">
    <textarea placeholder="Deskripsi Masalah" class="w-full p-2 border rounded"></textarea>
    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 transition">Submit</button>
</form>
@endsection