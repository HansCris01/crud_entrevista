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

<form action="{{ url('/documento_agregar_2') }}" method="post">
    @csrf
 <center>	
  <label for="fname">Documento:</label><br>
  <input type="text" required name="descripcion">
<br><br>
  <button class="btn btn-primary">Grabar</button>
  </center>	
</form>