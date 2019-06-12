@extends('plantilla')

@section('titulo')
    Catálogo
@endsection

@section('contenido')
    <ul>
       @isset ($productos)
           @forelse($productos as $itemCatalogo)
               <li>
                <a href="{{ route('producto.show', $itemCatalogo) }}">
                {{ $itemCatalogo->id }} {{ $itemCatalogo->nombre }} 
                <br>
                {{ $itemCatalogo->created_at->diffForHumans()}}
                </a>
                </li>
               
           @empty
               <li>No hay proyectos para mostrar</li>
           @endforelse
           {{ $productos->links() }}
       @else
           <li>Catálogo no definido</li>
       @endisset
   </ul>
@endsection