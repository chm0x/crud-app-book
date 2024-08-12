<div class="table-responsive">
    <table class="table table-primary">
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
                    <td>{{ $libro->imagen }}</td>
                    <td>
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
