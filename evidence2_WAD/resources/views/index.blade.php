<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evidence 2 - WAD</title>

</head>
<body>
    <h1>View: Index</h1>
    <h2>Libros añadidos...</h2>

    @foreach ($books as $book)
    <br>
        <div><strong>Título:</strong> {{ $book->title }}</div>
        <div><strong>Author:</strong> {{ $book->author_name }}</div>
        <div><strong>ISBN:</strong> {{ $book->isbn }}</div>
        <div><strong>Published Year:</strong> {{ $book->published_year }}</div>


    @endforeach
    <br>
    <a href=" {{ route('book.create') }}"><h4>Add New Book to the Library!</h4></a>

    <h3>Estudiante: Celic Gabriel Hernández Archundia</h3>
    <h3>ID: 2877240</h3>
</body>
</html>
