
<!-- What layout is gonna be used -->
@extends('layout.layout')

<!-- Just for one line -->
@section('title', 'Evidence 2 - Create')
@section('view','Create')
@section('content')
<form action="{{ route('book.store') }}" method="post">
    <!-- Inicio del formulario para agregar un curso. Cuando se envíe el formulario, hará una solicitud POST a la URL generada por route ('courses.store') -->
    @csrf

    <label for="">Title: </label>
    <input type="text" name="title" id="titleID"><br>
    <br>
    <label for="">Author: </label>
    <input type="text" name="author" id="authorID"><br>
    <br>
    <label for="">isbn: </label>
    <input type="text" name="isbn" id="isbnID"><br>
    <br>
    <label for="">Published Year: </label>
    <input type="text" name="year" id="yearID"><br>
    <br>
    <button type="submit">Add Book</button>

</form>
@endsection
