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
                            <h2 class="pageheader-title">Clientes</h2>

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
                <form name="search" action="{{ route('consultacli') }}" method="GET">
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
                               <h2><a href="{{ route('altacli') }}"><button type="button" class="btn btn-success float-right">+ Registrar Cliente</button></a></h2>
                            </div>
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table id="example3" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>

                                                <th>Nombre</th>
                                                <th>A. Paterno</th>
                                                <th>A. Materno</th>
                                                <th>Email</th>
                                                <th>Telefono</th>
                                                <th>Dirección</th>
                                                <th>Operaciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           @foreach ($clientes as $cli)


                                            <tr>
                                                                                          <th>{{$cli->nombre}}</th>
                                            <th>{{$cli->appaterno}}</th>
                                            <td>{{$cli->apmaterno}}</td>
                                            <td>{{$cli->email}}</td>
                                            <td>{{$cli->telefono}}</td>
                                            <td>{{$cli->direccion}}</td>
                                             <td>

          <form action="{{ route('eliminacli',['id' => $cli ->id])}}" method="POST">
           {{ csrf_field() }}
           {{ method_field('DELETE') }}

            <a href="{{route('consultacli2', $cli->id)}}"><button type="button" class="btn btn-secondary">Ver</button></a>
          <a href="{{route('modificacli', $cli->id)}}"><button type="button" class="btn btn-primary">Modificar</button></a>
            <button type="submit" class="btn btn-danger">Eliminar</button>

            </form>
          </td>

                                             </tr>
                                              @endforeach
                                        </tbody>
                                    </table><br>

            @if (isset($crit))
            <a href="{{route('pdfclientes',['crit'=>$crit])}}"><button type="button" class="btn btn-primary">Generar reporte PDF</button></a> <br>
            <a href="{{route('excelclientes',['crit'=>$crit])}}"><button type="button" class="btn btn-warning">Generar reporte EXCEL con criterio</button></a>
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
