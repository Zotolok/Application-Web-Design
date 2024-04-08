<!-- What layout is gonna be used -->
@extends('layout.layout')

<!-- Just for one line -->
@section('title', 'Evidence 2 - Edit')
@section('view', 'Edit')
@section('content')
<form action="{{ route('book.update', $book->id) }}" method="post">
    <!-- Inicio del formulario para agregar un curso. Cuando se envíe el formulario, hará una solicitud POST a la URL generada por route ('courses.store') -->
    @csrf

    @method('PUT')
    <label for=""><Strong><em>Title: </em></Strong></label>
    <input type="text" name="title" id="titleID" value="{{ $book -> title}}"><br>

    <label for=""><strong><em>Author: </em></strong></label>
    <input type="text" name="author" id="authorID" value="{{ $book -> author_name}}" ><br>

    <label for=""><strong><em>ISBN: </em></strong></label>
    <input type="text" name="isbn" id="isbnID" value="{{ $book -> isbn}}" ><br>

    <label for=""><strong><em>Published Year: </em></strong></label>
    <input type="text" name="year" id="yearID" value="{{ $book -> published_year }}" ><br>
    <br>
    <input type="submit" value="Edit Book">
</form>

@endsection
