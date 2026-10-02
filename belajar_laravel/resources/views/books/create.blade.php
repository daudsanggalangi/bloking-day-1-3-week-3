@extends('layouts.app')
@section('title', 'Tambah Buku')
@section('content')

<h2 class="text-2xl font-bold mb-4">Tambah Buku</h2>

@if ($errors->any())
<div class="bg-red-100 text-red-800 p-2 mb-4 rounded">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('books.store') }}" method="POST"
      class="bg-white p-6 rounded shadow-md space-y-4">

    @csrf

    <input type="text"
           name="title"
           placeholder="Judul Buku"
           class="w-full border p-2 rounded"
           required>

    <input type="text"
           name="author"
           placeholder="Penulis"
           class="w-full border p-2 rounded"
           required>

    <input type="text"
           name="publisher"
           placeholder="Penerbit"
           class="w-full border p-2 rounded">

    <input type="number"
           name="year"
           placeholder="Tahun Terbit"
           class="w-full border p-2 rounded">

    <button type="submit"
            class="bg-blue-700 text-white px-4 py-2 rounded">
        Simpan
    </button>
</form>

@endsection