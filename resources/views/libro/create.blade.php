<form method="POST" action="{{ route('libro.store') }}" enctype="multipart/form-data">
    @csrf
    <label for="name">Titulo:</label>
    <input type="text" name="titulo" />
    <br/>
    <label for="url">URL:</label>
    <input type="text" name="url" />
    <br/>
    <label for="image">Imagen:</label>
    <input type="file" name="imagen" />

    <br/>
    <br/>
    <input type="submit" value="Enviar" />
</form>