<div class="mb-3">
    <label for="titulo" class="form-label">Titulo:</label>
    <input
        type="text"
        class="form-control"
        name="titulo"
        id="titulo"
        aria-describedby="helpId"
        placeholder="Pon el nombre del libro..."
        value="{{ isset($libro->titulo) ? $libro->titulo : ''  }}"
    />
</div>

<div class="mb-3">
    <label for="url" class="form-label">URL</label>
    <input
        type="text"
        class="form-control"
        name="url"
        id="url"
        aria-describedby="helpId"
        placeholder="Inserta la URL..."
        value="{{ isset($libro->url) ? $libro->url : '' }}"
    />
</div>


<div class="mb-3">
    <label for="imagen" class="form-label">Imagen</label>
    @if(isset($libro->imagen))
        {{-- {{ asset('storage').'/'.$libro->imagen }} --}}
        <div id="fileHelpId" class="form-text">Imagen actual</div>
        <img class="d-block mb-2 img-fluid img-thumbnail" src="{{ asset('storage').'/'.$libro->imagen }}" alt="{{ $libro->titulo }}" width="250" />
    @endif
    <input
        type="file"
        class="form-control"
        name="imagen"
        id="imagen"
        aria-describedby="fileHelpId"
        placeholder="Seleccione una imagen..."
    />
</div>



<input  type="submit" 
        value="{{ Route::is('libro.edit') ? 'Actualizar' : 'Crear un nuevo libro' }}" 
        class="btn btn-success" 
/>
<a href="{{ route('libro.index') }}" class="btn btn-dark" >Regresar</a>