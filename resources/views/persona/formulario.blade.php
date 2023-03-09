 <link href="{{ asset('Contenido/bootstrap-4.3.1-dist/css/bootstrap-grid.css') }}" rel="stylesheet" type="text/css"/>
  <link href="{{ asset('Contenido/bootstrap-4.3.1-dist/css/bootstrap-grid.min.css') }}" rel="stylesheet" type="text/css"//>
  <link href="{{ asset('Contenido/bootstrap-4.3.1-dist/css/bootstrap-reboot.css') }}" rel="stylesheet" type="text/css"//>
  <link href="{{ asset('Contenido/bootstrap-4.3.1-dist/css/bootstrap-rebbot.min.css') }}" rel="stylesheet" type="text/css"//>
  <link href="{{ asset('Contenido/bootstrap-4.3.1-dist/css/bootstrap.css') }}" rel="stylesheet" type="text/css"//>
  <link href="{{ asset('Contenido/bootstrap-4.3.1-dist/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"//>


  <script src="{{ asset('Contenido/bootstrap-4.3.1-dist/js/bootstrap.bundle.js') }}" type="text/javascript"></script>
  <script src="{{ asset('Contenido/bootstrap-4.3.1-dist/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('Contenido/bootstrap-4.3.1-dist/js/bootstrap.js') }}" type="text/javascript"></script>
  <script src="{{ asset('Contenido/bootstrap-4.3.1-dist/js/bootstrap.min.js') }}" type="text/javascript"></script>
<center>  
<div class="form-group">
<label for="fname">Nombre:</label><br>
  <input type="text" name="nombre"  value="{{ $persona->nombre }}">
</div>  
  <br>
<div class="form-group">  
  <label for="lname">Apellido paterno:</label><br>
  <input type="text" name="apellido_paterno" value="{{ $persona->apellido_paterno }}">
</div>  
  <br>
<div class="form-group">
  <label for="fname">Apellido materno:</label><br>
  <input type="text" name="apellido_materno" value="{{ $persona->apellido_materno }}">
</div>
<br>
<div class="form-group">
  <select id="cars" name="codigo_documento" >
  <option value="{{ $persona->codigo_documento }}">{{ $persona->descripcion }}</option>  
  @foreach ( $documentos as $documento )    
  <option value="{{ $documento->codigo_documento }}">{{ $documento->descripcion }}</option>
  @endforeach  
  </select>
  </div>  
  <br>
<div class="form-group">
  <label for="lname">Numero de documento:</label><br>
  <input type="text" name="numero_documento" value="{{ $persona->numero_documento }}"><br>
<br>
  <button class="btn btn-primary">Actualizar</button>
  </div>
 </center>  