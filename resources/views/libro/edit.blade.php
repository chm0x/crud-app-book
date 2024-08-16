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