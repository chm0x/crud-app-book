@extends('layouts.app')

@section('content')
    <div class="container">
        {{-- VARIABLES DE SESSION --}}
        @if(Session::has('mensaje'))
            {{ Session::get('mensaje') }}
        @endif
        {{-- FIN VARIABLES DE SESSION --}}
        <a href="{{ route('libro.create') }}">Crear nuevo libro</a>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NOMBRE DEL ARCHIVO</th>
                        <th scope="col">URL</th>
                        <th scope="col">IMAGEN</th>
                        <th scope="col">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($libros as $libro)
                        <tr class="">
                            <td>{{ $libro->id }}</td>
                            <td>{{ $libro->titulo }}</td>
                            <td>{{ $libro->url }}</td>
                            <td>
                                <img src="{{ asset('storage').'/'.$libro->imagen }}" alt="{{ $libro->titulo }}" width="50" />
                            </td>
                            <td>
                                <a href="{{ route('libro.edit', $libro) }}">Editar</a>
                                |
                                <form action="{{ route('libro.destroy', $libro) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Eliminar libro" class="btn btn-danger" />
                                </form>
                            </td>
                        </tr>
                    @empty
                        <p>No hay nada que mostrar! </p>
                    @endforelse
                    {{-- @forelse($data as $libro)
                        <tr class="">
                            <td>{{ $libro->id }}</td>
                            <td>{{ $libro->titulo }}</td>
                            <td>{{ $libro->url }}</td>
                            <td>{{ $libro->imagen }}</td>
                            <td>botones</td>
                        </tr>
                    @empty
                    <p>No hay nada que mostrar!</p>
                    @endforelse --}}
                </tbody>
            </table>
        </div>
    </div>
@endsection
