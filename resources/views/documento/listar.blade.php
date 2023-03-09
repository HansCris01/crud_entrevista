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

<a href="{{ url('/persona') }}" class="btn btn-light">Regresar al formulario de Persona</a>
<br><br>
<a href="{{ url('/documento_agregar_1') }}" class="btn btn-success">Agregar nuevos tipos de documentos</a>
<table class="table table-hover">
<thead>
  <tr>
    <th>codigo</th>
    <th>Documento</th>
    <th>opciones</th> 
  </tr>
</thead>
<tbody> 
@foreach ( $documentos as $documento )     
  <tr>
    <td>{{ $documento->codigo_documento }}</td>
    <td>{{ $documento->descripcion }}</td>
    <td>
      <a href="{{ url('/documento/'.$documento->codigo_documento.'/edit') }}" class="btn btn-primary">Editar</a><br><br>
      <form action="{{ url('/documento/'.$documento->codigo_documento) }}" method="post">
      @csrf 
      {{ method_field('PATCH') }}
      <input type="hidden" value="0" name="estado"/>
      <button class="btn btn-danger">Eliminar</button>
      </form>
    <td>
  </tr>
@endforeach  
</tbody> 
</table>