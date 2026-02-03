@extends('layouts.app')

@section('content')
<h2 class="text-3xl font-bold mb-6">Dashboard</h2>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
        <h3 class="text-xl font-semibold">Servis Selesai</h3>
        <p class="text-2xl text-green-500">{{ $stats['completed'] ?? 50 }}</p>
    </div>
    <!-- Tambahkan cards lain -->
</div>
@endsection