<label for="name">Titulo:</label>
<input type="text" name="titulo" value="{{ isset($libro->titulo) ? $libro->titulo : ''  }}"  />
<br/>
<label for="url">URL:</label>
<input type="text" name="url" value="{{ isset($libro->url) ? $libro->url : '' }}"  />
<br/>
<label for="image">Imagen:</label>
@if(isset($libro->imagen))
    {{ asset('storage').'/'.$libro->imagen }}
    <img src="{{ asset('storage').'/'.$libro->imagen }}" alt="{{ $libro->titulo }}" width="200" />
@endif
<input type="file" name="imagen"  />
<br/>
<br/>
<input type="submit" value="Enviar" />