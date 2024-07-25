@extends('layout')

@section('content')
    <h1>Modifier le livre</h1>
    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Titre:</label>
        <input type="text" id="title" name="title" value="{{ $book->title }}" required>
        <label for="author">Auteur:</label>
        <input type="text" id="author" name="author" value="{{ $book->author }}" required>
        <label for="year">Année:</label>
        <input type="number" id="year" name="year" value="{{ $book->year }}" required>
        <label for="genre">Genre:</label>
        <input type="text" id="genre" name="genre" value="{{ $book->genre }}">
        <button type="submit">Mettre à jour</button>
    </form>
@endsection