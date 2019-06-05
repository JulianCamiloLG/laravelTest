@extends('plantilla')

@section('titulo')
    Catálogo
@endsection

@section('contenido')
    <ul>
       @isset ($catalogo)
           @forelse($catalogo as $itemCatalogo)
               <li> {{ $itemCatalogo['producto'] }} </li>
           @empty
               <li>No hay proyectos para mostrar</li>
           @endforelse
       @else
           <li>Catálogo no definido</li>
       @endisset
   </ul>
@endsection