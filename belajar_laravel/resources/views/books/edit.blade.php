@extends('layouts.app')
@section('title', 'Edit Buku')
@section('content')

<h2 class="text-2xl font-bold mb-4">Edit Buku</h2>

<form action="{{ route('books.update', $book->id) }}"
      method="POST"
      class="bg-white p-6 rounded shadow-md space-y-4">

    @csrf
    @method('PUT')

    <input type="text"
           name="title"
           value="{{ $book->title }}"
           class="w-full border p-2 rounded"
           required>

    <input type="text"
           name="author"
           value="{{ $book->author }}"
           class="w-full border p-2 rounded"
           required>

    <input type="text"
           name="publisher"
           value="{{ $book->publisher }}"
           class="w-full border p-2 rounded">

    <input type="number"
           name="year"
           value="{{ $book->year }}"
           class="w-full border p-2 rounded">

    <button type="submit"
            class="bg-blue-700 text-white px-4 py-2 rounded">
        Perbarui
    </button>
</form>

@endsection