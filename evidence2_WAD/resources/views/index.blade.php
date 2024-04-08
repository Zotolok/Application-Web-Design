<!-- What layout is gonna be used -->
@extends('layout.layout')

<!-- Just for one line -->
@section('title', 'Evidence 2 - Index')
@section('view', 'Index')
@section('content')
<h2>Libros añadidos...</h2>

@foreach ($books as $book)
<br>
    <div><strong>Título:</strong> {{ $book->title }}</div>
    <div><strong>Author:</strong> {{ $book->author_name }}</div>
    <div><strong>ISBN:</strong> {{ $book->isbn }}</div>
    <div><strong>Published Year:</strong> {{ $book->published_year }}</div>
    <br>
    <a href=" {{ route('book.edit', $book->id) }}">Edit this Book</a>
<br>
<form action="{{ route('book.destroy', $book->id) }}" method="post">
    @csrf
    @method('DELETE')
    <br>
    <button type="submit">Delete Book</button>
</form>
@endforeach



<br>
<a href=" {{ route('book.create') }}"><h4>Add New Book to the Library!</h4></a>
@endsection
