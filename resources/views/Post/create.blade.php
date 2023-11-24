@extends('layouts.app')

@section('titulo')
Crea una nueva publicación
@endsection
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

@section('contenido')
    <div class="md:flex md:items-center">
        <div class="md:w-6/12 px-10">
            <form action="{{ route('imagenes.store') }}" enctype="multipart/form-data" method="post" id="dropzone" class="dropzone border-dashed borde-2 w-full h-96 rounted flex flex-col justify-center items-center"></form>
        </div>

        <div class="md:w-6/12 px-10 bg-white p-6 rounded-lg shadow-xl">
        <form action="{{route('register')}}" method="POST" novalidate>
        @csrf
        <div class="mb-5">
            <label for="titulo" class="mb-2 block uppercase text-gray-500 font-bold">Titulo</label>
            <input type="text" name="titulo" id="titulo" placeholder="Ingrese Titulo" class="border p-3 w-full rounded-lg @error('titulo')
            border-red-500 @enderror"value="{{old('titulo')}}">
            @error('titulo')
            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>   
            @enderror
        </div>
        </form>
            <div class="mb-5">
                <label for="descripcion" class="mb-2 block uppercase text-gray-500 font-bold">Descripcion de la publicación</label>
                <textarea type="text" name="descripcion" id="descripcion" placeholder="Ingrese Descripcion" class="border p-3 w-full rounded-lg @error('descripcion')
                border-red-500 @enderror"value="{{old('descripcion')}}"></textarea>
                @error('descripcion')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>   
                @enderror
            </div>

            <input type="submit" value="Publicar" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-xl">
        </div>

        

    </div>
@endsection