<!DOCTYPE html>
<html lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <title>Reporte de Clientes</title>
</head>
<body>
<div class="page-content">
    <div class="panel">
        <h4 align="center">Viajes con Experiencia</h4><br>
        <h4 align="center">Reporte de Clientes</h4><br><br>
        <div class="table-responsive">
  <table class="table" border="1" class="display table table-hover dataTable table-striped w-full" data-plugin="dataTable">
    <thead >
      <tr>
        <th scope="col" ALIGN=CENTER>Clave</th>
        
        <th scope="col" ALIGN=CENTER>Nombre</th>
        <th scope="col" ALIGN=CENTER>Apellido Paterno</th>
        <th scope="col" ALIGN=CENTER>Apellido Materno</th>
        <th scope="col" ALIGN=CENTER>Fecha de Nacimiento</th>
        <th scope="col" ALIGN=CENTER>Genero</th>
        <th scope="col" ALIGN=CENTER>Telefono</th>
        <th scope="col" ALIGN=CENTER>Fecha de Creacion</th>

      </tr>
    </thead>
    <tbody class="tbody-light">
    @foreach($clientes as $c)
      <tr>
        <td scope="row">{{$c->id}}</td>
        <td>{{$c->nombre}}</td>
        <td>{{$c->app}}</td>
        <td>{{$c->apm}}</td>
        <td>{{$c->fn}}</td>
        <td>{{$c->genero}}</td>
        <td>{{$c->telefono}}</td>
        <td>{{$c->created_at}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  
  </div>
    </div>
</div>
</body>
</html>



