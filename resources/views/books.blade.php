
@extends('layout.base')
@section('css','books')
@section('title','Books')

@section('content')
<h1>Livres</h1>

<table>
    <tr>
        <th>Titre</th>
        <th>Auteur</th>
        <th>Date</th>
        <th>Genre</th>
    </tr>
    @foreach ($books as $book )
    <tr>
        <td>{{$book->title}}</td>
        <td>{{$book->author}}</td>
        <td>{{$book->genre}}</td>
        <td>{{$book->publication_year}}</td>
    </tr>
    @endforeach
</table>
@endsection
