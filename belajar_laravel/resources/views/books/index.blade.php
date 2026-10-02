@extends('layouts.app')
@section('title', 'Daftar Buku')
@section('content')

<h2 class="text-2xl font-bold mb-4">Daftar Buku</h2>

@if(session('success'))
<div class="bg-green-100 text-green-800 p-2 mb-4 rounded">
    {{ session('success') }}
</div>
@endif

<a href="{{ route('books.create') }}" class="bg-green-600 text-white px-3 py-1 rounded hover:bg-green-700">
    + Tambah Buku
</a>

<table class="w-full bg-white rounded shadow-md mt-4">
    <thead>
        <tr class="bg-blue-700 text-white">
            <th class="p-2">Judul</th>
            <th class="p-2">Penulis</th>
            <th class="p-2">Penerbit</th>
            <th class="p-2">Tahun</th>
            <th class="p-2">Aksi</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($books as $book)
        <tr class="border-b hover:bg-gray-50">
            <td class="p-2">{{ $book->title }}</td>
            <td class="p-2">{{ $book->author }}</td>
            <td class="p-2">{{ $book->publisher }}</td>
            <td class="p-2">{{ $book->year }}</td>

            <td class="p-2 text-center">
                <a href="{{ route('books.edit', $book->id) }}"
                   class="text-blue-600 hover:underline">Edit</a> |

                <form action="{{ route('books.destroy', $book->id) }}"
                      method="POST"
                      class="inline"
                      onsubmit="return confirm('Yakin ingin menghapus buku ini?');">

                    @csrf
                    @method('DELETE')

                    <button type="submit"
                            class="text-red-600 hover:underline">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection