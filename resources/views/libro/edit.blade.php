@extends('layouts.app')

@section('content')
    <div class="container">
        <form 
            method="POST" 
            action="{{ route('libro.update', $libro) }}" 
            enctype="multipart/form-data"
        >
            @csrf
            @method('PATCH')
            @include('libro.form', $libro)
        </form>
        <a href="{{ route('libro.index') }}">Regresar</a>
    </div>
@endsection