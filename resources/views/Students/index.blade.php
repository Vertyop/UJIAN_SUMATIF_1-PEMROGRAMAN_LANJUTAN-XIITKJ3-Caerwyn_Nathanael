@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Daftar Siswa</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach ($students as $student)
            <div class="bg-white rounded shadow p-4">
                <img src="{{ $student['foto'] }}" alt="Foto {{ $student['nama'] }}" class="mb-2 w-full h-40 object-cover rounded">
                <h2 class="text-lg font-semibold">{{ $student['nama'] }}</h2>
                <p class="text-sm text-gray-600">{{ $student['kelas'] }}</p>
                <p class="text-sm">{{ $student['hobi'] }}</p>
                <a href="/students/{{ $student['id'] }}">
                    <x-button>Lihat Detail</x-button>
                </a>
            </div>
        @endforeach
    </div>
@endsection
