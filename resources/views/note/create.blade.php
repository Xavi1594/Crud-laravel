@extends('layouts.app')

@section('content')
<a href="{{route("note.index")}}">back</a>

<form method="POST" action="{{ route('note.store')}}">
    @csrf
    <label>Title </label>
    <input type="text" name="title" />

    <label for="description"></label>
    <input type="text" name="description" />

    <input type="submit" />
</form> 
@endsection
