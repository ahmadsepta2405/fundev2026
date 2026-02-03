@extends('layouts.app')

@section('content')
<h2 class="text-3xl font-bold mb-6">Kepuasan Pelanggan</h2>
<form class="space-y-4">
    <div class="flex space-x-1">
        <!-- Stars rating (gunakan icons) -->
        <span class="text-yellow-500">★</span> <!-- Repeat for 5 stars -->
    </div>
    <textarea placeholder="Komentar" class="w-full p-2 border rounded"></textarea>
    <button type="submit" class="bg-purple-500 text-white px-4 py-2 rounded hover:bg-purple-600 transition animate-pulse">Kirim Feedback</button>
</form>
<!-- Daftar ulasan -->
<div class="mt-6 space-y-4">
    <div class="bg-white p-4 rounded shadow">Ulasan 1: Bagus sekali!</div>
</div>
@endsection