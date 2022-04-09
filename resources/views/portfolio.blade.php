@extends('layout')

@section('titulo', 'Portafolio')

@section('content1')
    <h1>Portafolio</h1>

    <ul>
    @forelse($porta as $pItem)
        <li>{{$pItem['title']}}</pre></li>
    @empty
        <li>No Hay Proyectos Para Mostrar</li>  
    @endforelse
    </ul>
        
@endsection