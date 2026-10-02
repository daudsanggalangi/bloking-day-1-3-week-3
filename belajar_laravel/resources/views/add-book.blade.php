@extends('layouts.app')

@section('title', 'Tambah Buku')

@section('content')
<div class="page-heading">
    <div>
        <h1>Tambah Buku</h1>
        <p class="subtitle">Isi informasi buku yang ingin ditambahkan.</p>
    </div>
</div>
<section class="panel">
<form action="/books/add" method="POST" class="book-form">
    @csrf
    <div class="field">
        <label for="title">Judul buku</label>
        <input id="title" type="text" name="title" value="{{ old('title') }}" required>
        @error('title') <span class="field-error">{{ $message }}</span> @enderror
    </div>
    <div class="field">
        <label for="author">Penulis</label>
        <input id="author" type="text" name="author" value="{{ old('author') }}" required>
        @error('author') <span class="field-error">{{ $message }}</span> @enderror
    </div>
    <div class="field">
        <label for="publisher">Penerbit</label>
        <input id="publisher" type="text" name="publisher" value="{{ old('publisher') }}">
        @error('publisher') <span class="field-error">{{ $message }}</span> @enderror
    </div>
    <div class="field">
        <label for="year">Tahun terbit</label>
        <input id="year" type="number" name="year" min="0" max="9999" value="{{ old('year') }}">
        @error('year') <span class="field-error">{{ $message }}</span> @enderror
    </div>
    <div class="form-actions">
        <button type="submit" class="button button-primary">Simpan Buku</button>
        <a href="/books" class="button button-secondary">Batal</a>
    </div>
</form>
</section>
@endsection