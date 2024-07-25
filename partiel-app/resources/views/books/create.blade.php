@extends('layout')

@section('content')
    <h1>Ajouter un nouveau livre</h1>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <label for="title">Titre:</label>
        <input type="text" id="title" name="title" required>
        <label for="author">Auteur:</label>
        <input type="text" id="author" name="author" required>
        <label for="year">Année:</label>
        <input type="number" id="year" name="year" required>
        <label for="genre">Genre:</label>
        <input type="text" id="genre" name="genre">
        <button type="submit">Ajouter</button>
    </form>
@endsection