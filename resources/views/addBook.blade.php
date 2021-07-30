
@extends('layout.base')
@section('title','Ajouter')
@section('css','addBook')

@section('content')


<form action="{{ route('posts.store') }}" method="POST">
    <div>
        <label for="titre">Titre :</label>
        <input type="text" id="titre_id" name="titre">
    </div>
    <div>
        <label for="auteur">Auteur :</label>
        <input type="text" id="auteur_id" name="auteur">
    </div>
    <div>
        <label for="date"> Date :</label>
        <input type="number" id="date_id" name="date">
    </div>
    <div>
        <label for="genre">Auteur :</label>
        <input type="text" id="genre_id" name="genre">
    </div>
    <input type="submit" value="ajouter">
</form>
@endsection
