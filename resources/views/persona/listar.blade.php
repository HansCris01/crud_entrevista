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

<a href="{{ url('/listar_documento') }}" class="btn btn-success" >Agregar nuevos tipos de documentos</a>
<br><br>
<a href="{{ url('/persona_agregar_1') }}" class="btn btn-secondary">Agregar una nueva persona</a>
<br><br>
<table class="table table-dark">
<thead>
  <tr>
    <th>codigo</th>
    <th>nombre</th>
    <th>apellido paterno</th>
    <th>apellido materno</th>
    <th>Tipo de documento</th>
    <th>Numero de documento</th>
    <th>opciones</th> 
  </tr>
</thead>
<tbody> 
@foreach ( $personas as $persona )     
  <tr>
    <td>{{ $persona->codigo_persona }}</td>
    <td>{{ $persona->nombre }}</td>
    <td>{{ $persona->apellido_paterno }}</td>
    <td>{{ $persona->apellido_materno }}</td>
    <td>{{ $persona->descripcion }}</td>
    <td>{{ $persona->numero_documento }}</td>
    <td>
      <a href="{{ url('/persona/'.$persona->codigo_persona.'/edit') }}" class="btn btn-primary">Editar</a><br><br>
      <form action="{{ url('/persona/'.$persona->codigo_persona) }}" method="post">
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