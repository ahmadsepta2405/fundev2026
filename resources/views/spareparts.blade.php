@extends('layouts.app')
@section('title','Sparepart')

@section('content')
<h1 class="text-3xl font-semibold mb-6">Sparepart Tersedia</h1>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
@foreach(['Keyboard','Baterai','LCD'] as $item)
<div class="bg-white rounded-2xl shadow-sm p-6">
    <h3 class="font-semibold text-lg">{{ $item }}</h3>
    <p class="text-sm text-slate-500 mt-2">
        Ready stock & original
    </p>
</div>
@endforeach
</div>
@endsection
