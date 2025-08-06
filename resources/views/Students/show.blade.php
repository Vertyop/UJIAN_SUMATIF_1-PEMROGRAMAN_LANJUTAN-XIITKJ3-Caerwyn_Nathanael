@extends('layouts.app')

@section('content')
    <div class="bg-white p-6 rounded shadow">
        <img src="{{ $student['foto'] }}" class="mb-4 w-full h-64 object-cover rounded" alt="Foto {{ $student['nama'] }}">
        <h2 class="text-2xl font-bold mb-2">{{ $student['nama'] }}</h2>
        <p class="text-gray-600 mb-2">Kelas: {{ $student['kelas'] }}</p>
        <p class="mb-2">Hobi: {{ $student['hobi'] }}</p>
        <p class="mb-4">{{ $student['deskripsi'] }}</p>
        <a href="/students">
            <x-button>Kembali</x-button>
        </a>
    </div>
@endsection
