<!-- What layout is gonna be used -->
@extends('layout.layout')

<!-- Just for one line -->
@section('title', 'Evidence 2 - Index')
@section('view', 'Index')
@section('content')
<h2>Libros añadidos...</h2>

@foreach ($books as $book)
<br>
<div class="libros">
    <div class="letras"><strong>Título:</strong> {{ $book->title }}</div>
    <div class="letras"><strong>Author:</strong> {{ $book->author_name }}</div>
    <div class="letras"><strong>ISBN:</strong> {{ $book->isbn }}</div>
    <div class="letras"><strong>Published Year:</strong> {{ $book->published_year }}</div>
    <br>
    <a href=" {{ route('book.edit', $book->id) }}">Edit this Book</a>

    <form action="{{ route('book.destroy', $book->id) }}" method="post">
        @csrf
        @method('DELETE')
        <br>
        <button type="submit">Delete Book</button>
    </form>
</div>

@endforeach



<br>
<a href=" {{ route('book.create') }}"><h4>Add New Book to the Library!</h4></a>
@endsection
