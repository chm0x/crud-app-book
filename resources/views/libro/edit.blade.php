<form method="POST" action="{{ route('libro.update') }}" enctype="multipart/form-data">
    @csrf
    @include('libro.form',['heeela' => 'hola Mundo'])
</form>