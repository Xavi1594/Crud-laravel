@extends('layouts.app')
@section('content')
<a href="{{route("note.index")}}">back</a>

<form method="post" action="{{route("note.update", $note->id)}}">
    @method('PUT')
    @csrf
    <label for="Title"></label>
    <input type="text" name="title" id="title" value="{{$note->title}}">
<label for="Description"></label>
    <input type="text" name="description" id="description" value="{{$note-> description}}">
    <input type="submit" value="Update">
    </form>
    @endsection