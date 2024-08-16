<form 
    method="POST" 
    action="{{ route('libro.store') }}" 
    enctype="multipart/form-data"
>
    @csrf
    @include('libro.form')
</form>
{{-- <a href="{{ url()->previous() }}">Regresar</a> --}}
<a href="{{ route('libro.index') }}">Regresar</a>