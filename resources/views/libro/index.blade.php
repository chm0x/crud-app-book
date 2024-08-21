@extends('layouts.app')

@section('content')
    <div class="container">
        {{-- VARIABLES DE SESSION --}}
        @if (Session::has('mensaje'))
            <div
                class="alert alert-success alert-dismissible fade show mb-2"
                role="alert"
            >
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="alert"
                    aria-label="Close"
                ></button>
                <strong>Mensaje: </strong>{{ Session::get('mensaje') }}
            </div>
        @endif
        {{-- FIN VARIABLES DE SESSION --}}

        <div class="card">
            <div class="card-header">
                <a class="btn btn-success" href="{{ route('libro.create') }}">Crear un nuevo libro</a>
            </div>
            <div class="card-body">
                
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
                                        <img class="img-fluid img-thumbnail" src="{{ asset('storage') . '/' . $libro->imagen }}" alt="{{ $libro->titulo }}"
                                            width="50" />
                                    </td>
                                    <td>
                                        <a href="{{ route('libro.edit', $libro) }}" class="btn btn-warning">Editar</a>
                                        <form class="d-inline" action="{{ route('libro.destroy', $libro) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="Eliminar libro" class="btn btn-danger" />
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <p>No hay nada que mostrar! </p>
                            @endforelse
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="card-footer text-muted ">
                {{ $libros->links() }}
            </div>
        </div>




    </div>
@endsection
