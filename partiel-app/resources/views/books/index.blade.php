@extends('layout')

@section('content')
    <h1>Liste des livres</h1>
    <a href="{{ route('books.create') }}">Ajouter un nouveau livre</a>
    <ul>
        @foreach ($books as $book)
            <li>
                {{ $book->title }} - {{ $book->author }}
                <a href="{{ route('books.edit', $book->id) }}">Modifier</a>
                <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection