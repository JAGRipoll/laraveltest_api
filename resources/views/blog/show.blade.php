@extends('blog.layout')

@section('content')
    <br><br>
    {{-- <x-card info='dinamics' bg="true"> 
        Contenido Dinámico
    </x-card>
    <br>

    <x-card class="bg-yellow-600" bg="false">
        Contenido Dinámico más atributos 
    </x-card> --}}

    <x-blog.show :post="$post" />
    <x-dynamic-component component='blog.show' :post="$post"/>
        
    
    {{-- <div class="car card-white">
        <h1>{{ $post->title }}</h1>
        <span>{{ $post->category->title }}</span>
        <hr>

        {{ $post->content }}
        
    </div> --}}
@endsection