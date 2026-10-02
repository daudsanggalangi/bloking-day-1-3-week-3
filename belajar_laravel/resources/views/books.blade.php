@extends('layouts.app')

@section('title', 'Koleksi Buku')

@section('content')
<div class="page-heading">
	<div>
		<h1>Koleksi Buku</h1>
		<p class="subtitle">Kelola daftar buku yang tersedia.</p>
	</div>
	<a class="button button-primary" href="/add">+ Tambah Buku</a>
</div>

<section class="panel" aria-label="Daftar buku">
	@if ($books->isEmpty())
		<div class="empty-state">
			<strong>Belum ada buku</strong>
			<span>Tambahkan buku pertama ke dalam koleksi.</span>
		</div>
	@else
		<div class="table-wrap">
			<table class="book-table">
				<thead>
					<tr>
						<th>Judul</th>
						<th>Penulis</th>
						<th>Penerbit</th>
						<th>Tahun</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($books as $book)
						<tr>
							<td>{{ $book->title }}</td>
							<td>{{ $book->author }}</td>
							<td>{{ $book->publisher ?: '-' }}</td>
							<td>{{ $book->year ?: '-' }}</td>
							<td>
								<div class="actions">
									<a class="button button-secondary" href="/books/edit/{{ $book->id }}">Edit</a>
									<form action="/books/{{ $book->id }}" method="POST" onsubmit="return confirm('Hapus buku ini?')">
										@csrf
										@method('DELETE')
										<button class="button button-danger" type="submit">Hapus</button>
									</form>
								</div>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	@endif
</section>
@endsection
