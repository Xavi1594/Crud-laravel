@extends('layouts.app')
@section('content')
    <ul>
        @forelse ($notes as $note)
            <li><a href="#">{{ note->title }} </a></li>
        @empty
            <strong>NO HAY DATOS QUE MOSTRAR</strong>
        @endforelse
    </ul>
@endsection
