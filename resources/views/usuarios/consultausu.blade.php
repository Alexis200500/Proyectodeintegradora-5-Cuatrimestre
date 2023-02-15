@extends('../layouts/app')

<!--Principal-->
@section('contenido')

  <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Usuarios</h2>
                        
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
             
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- data table  -->
                    <!-- ============================================================== -->
                    
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                <div class="box-body">
                <form name="search" action="{{ route('consultausu') }}" method="GET">
                 {{ csrf_field() }}
                  <div class="input-group">
                    <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-search"></i></span>
                    <input type="text" class="form-control" name="criterio" placeholder="Ingresa un Criterio de Búsqueda...">
                    <span class="input-group-btn">
                      <input type="submit" class="pull-right btn btn-info" value="Buscar Ahora">
                    </span>
                  </div>
                </form>
            </div>

                        <div class="card">

                   
                            <div class="card-header">
                               <h2><a href="{{ route('altausu') }}"><button type="button" class="btn btn-success float-right">+ Registrar Usuario</button></a></h2>
                            </div>
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table id="example3" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nombre</th>
                                                <th>Usuario</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>Operaciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           @foreach ($usuarios as $usu)
        
    
                                            <tr>
                                              <th>{{$usu->idusuario}}</th>
                                            <th>{{$usu->nombre}}</th>
                                            <th>{{$usu->usuario}}</th>
                                            <td>{{$usu->email}}</td>
                                            <td>{{$usu->password}}</td>
                                             <td>
    
          <form action="{{ route('eliminausu',['idusuario' => $usu ->idusuario])}}" method="POST">
           {{ csrf_field() }}
           {{ method_field('DELETE') }}

            <a href="{{route('consultausu2', $usu->idusuario)}}"><button type="button" class="btn btn-secondary">Ver</button></a>
          <a href="{{route('modificausu', $usu->idusuario)}}"><button type="button" class="btn btn-primary">Modificar</button></a>
            <button type="submit" class="btn btn-danger">Eliminar</button>
            
            </form>
          </td>
                                        
                                             </tr>
                                              @endforeach
                                        </tbody>
                                    </table>
                                <br>
								 @if (isset($crit))
            <a href="{{route('pdfusuarios',['crit'=>$crit])}}"><button type="button" class="btn btn-primary">Generar reporte PDF</button></a>
            <a href="{{route('excelusuarios',['crit'=>$crit])}}"><button type="button" class="btn btn-warning">Generar reporte EXCEL</button></a>
			 @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end data table  -->
                    <!-- ============================================================== -->
                </div>

            </div>

  
@endsection