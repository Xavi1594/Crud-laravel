@extends('layouts.app')
@section('content')
<a href="{{route("note.create")}}">Create new note</a>
    <ul>
        @forelse ($notes as $note)
            <li><a href="z">{{ $note->title }} </a>
                <a href="{{route("note.edit" ,  $note -> id)}}">EDIT</a>
                <a href="">DELETE</a>

            
            </li>
        @empty
            <strong>NO HAY DATOS QUE MOSTRAR</strong>
        @endforelse
    </ul>
@endsection
