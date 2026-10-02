@extends('layouts.app')

@section('title', 'Edit Buku')

@section('content')
<div class="page-heading">
    <div>
        <h1>Edit Buku</h1>
        <p class="subtitle">Perbarui informasi buku.</p>
    </div>
</div>
<section class="panel">
<form action="/books/edit/{{ $book->id }}" method="POST" class="book-form">
    @csrf
    <div class="field">
        <label for="title">Judul buku</label>
        <input id="title" type="text" name="title" value="{{ old('title', $book->title) }}" required>
        @error('title') <span class="field-error">{{ $message }}</span> @enderror
    </div>
    <div class="field">
        <label for="author">Penulis</label>
        <input id="author" type="text" name="author" value="{{ old('author', $book->author) }}" required>
        @error('author') <span class="field-error">{{ $message }}</span> @enderror
    </div>
    <div class="field">
        <label for="publisher">Penerbit</label>
        <input id="publisher" type="text" name="publisher" value="{{ old('publisher', $book->publisher) }}">
        @error('publisher') <span class="field-error">{{ $message }}</span> @enderror
    </div>
    <div class="field">
        <label for="year">Tahun terbit</label>
        <input id="year" type="number" name="year" min="0" max="9999" value="{{ old('year', $book->year) }}">
        @error('year') <span class="field-error">{{ $message }}</span> @enderror
    </div>
    <div class="form-actions">
        <button type="submit" class="button button-primary">Simpan Perubahan</button>
        <a href="/books" class="button button-secondary">Batal</a>
    </div>
</form>
</section>
@endsection