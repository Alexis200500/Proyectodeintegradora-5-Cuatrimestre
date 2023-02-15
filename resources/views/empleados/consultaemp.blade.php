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
                            <h2 class="pageheader-title">Empleados</h2>

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
                <form name="search" action="{{ route('consultaemp') }}" method="GET">
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
                               <h2><a href="{{ route('altaemp') }}"><button type="button" class="btn btn-success float-right">+ Registrar empario</button></a></h2>
                            </div>
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table id="example3" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nombre</th>
                                                <th>A. Paterno</th>
                                                <th>A. Materno</th>
                                                <th>Telefono</th>
                                                <th>Direccion</th>
                                                <th>Operaciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           @foreach ($empleados as $emp)


                                            <tr>
                                              <th>{{$emp->idemp}}</th>
                                            <th>{{$emp->nombre}}</th>
                                            <th>{{$emp->appat}}</th>
                                            <td>{{$emp->apmat}}</td>
                                            <td>{{$emp->telefono}}</td>
                                            <td>{{$emp->direccion}}</td>
                                             <td>

          <form action="{{ route('eliminaemp',['idemp' => $emp ->idemp])}}" method="POST">
           {{ csrf_field() }}
           {{ method_field('DELETE') }}
           <button type="submit" class="btn btn-danger">Eliminar</button>
           <a href="{{route('modificaemp', $emp->idemp)}}"><button type="button" class="btn btn-primary">Modificar</button></a>

            <a href="{{route('consultaemp2', $emp->idemp)}}"><button type="button" class="btn btn-secondary">Ver</button></a>

            </form>
          </td>

                                             </tr>
                                              @endforeach
                                        </tbody>
                                    </table><br>
									
			@if (isset($crit))
            <a href="{{route('pdfempleados',['crit'=>$crit])}}"><button type="button" class="btn btn-primary">Generar reporte PDF</button></a>
            <a href="{{route('excelempleados',['crit'=>$crit])}}"><button type="button" class="btn btn-warning">Generar reporte EXCEL</button></a>
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
