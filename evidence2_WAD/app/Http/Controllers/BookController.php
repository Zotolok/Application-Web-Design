<?php

namespace App\Http\Controllers;
use App\Models\Book;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function create(){
        return view('create');
    }

    public function store (Request $request) // El parámetro de un conjunto de tipo "Request". "Request" es utilizado para manejar y obtener datos enviados por el cliente, como los de un formulario. En este caso, usaremos el $request (donde vendrán los id del formulario) para pasar los datos al $book (que son los parámetros de la tabla "books" de la base de datos "library")
    {
        $book = new Book; // Creamos una nueva instancia del modelo Book
        $book -> title = $request -> title;
        $book -> author_name = $request -> author;
        $book -> isbn = $request -> isbn;
        $book -> published_year = $request -> year;

        $book -> save();
        return redirect() -> route('book.index');

    }

    public function index(){
        $books = Book::all();
        return view('index', ['books' => $books]); // En esta parte aclaramos que queremos devolver la vista "index" y además queremos pasarle un conjunto de datos con la clave "books". Esto lo atraparemos en nuestro "index.blade.php"
    }

    public function edit($id){
        $book = Book::find($id); // SELECT * FROM courses WHERE id=6 LIMIT 1;
        return view('edit',['book' => $book]);
    }

    public function update(Request $request, $id){
        $book = Book::find($id);

        $book -> title = $request -> title;
        $book -> author_name = $request -> author;
        $book -> isbn = $request -> isbn;
        $book -> published_year = $request -> year;

        $book -> save();
        return redirect() -> route('book.index');
    }

    public function destroy($id){
        $book = Book::find($id);
        $book -> delete();
        return redirect() ->route('book.index');
    }
}
