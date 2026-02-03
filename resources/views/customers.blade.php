@extends('layouts.app')
@section('title','Pelanggan')

@section('content')
<div class="space-y-6">

<h1 class="text-3xl font-semibold">Data Pelanggan</h1>

<div class="grid grid-cols-1 md:grid-cols-4 gap-6">
@for ($i=1; $i<=8; $i++)
    <div class="bg-white p-6 rounded-2xl shadow-sm text-center">
        <img src="https://i.pravatar.cc/100?img={{$i}}" class="mx-auto rounded-full mb-3">
        <p class="font-medium">Customer {{$i}}</p>
        <p class="text-xs text-slate-500">Pelanggan Aktif</p>
    </div>
@endfor
</div>

</div>
@endsection
