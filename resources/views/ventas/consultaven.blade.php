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
                            <h2 class="pageheader-title">Ventas</h2>
                        
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
                <form name="search" action="{{ route('consultaven') }}" method="GET">
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
                               <h2><a href="{{ route('altaven') }}"><button type="button" class="btn btn-success float-right">+ Registrar Venta</button></a></h2>
                            </div>
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table id="example3" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Venta</th>
                                                <th>Cantidad</th>
                                                <th>Precio</th>
                                                <th>Caracteristicas</th>
                                                <th>Descripcion</th>
                                                <th>Cliente</th>
                                                <th>Operaciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           @foreach ($ventas as $ven)
        
    
                                            <tr>
                                              <th>{{$ven->venta}}</th>
                                            <th>{{$ven->cantidad}}</th>
                                            <th>{{$ven->precio}}</th>
                                            <td>{{$ven->caracteristicas}}</td>
                                            <td>{{$ven->descripcion}}</td>
                                            <td>{{$ven->cliente}}</td>
                                             <td>
    
          <form action="{{ route('eliminaven',['id' => $ven ->id])}}" method="POST">
           {{ csrf_field() }}
           {{ method_field('DELETE') }}

            <a href="{{route('consultaven2', $ven->id)}}"><button type="button" class="btn btn-secondary">Ver</button></a>
          <a href="{{route('modificaven', $ven->id)}}"><button type="button" class="btn btn-primary">Modificar</button></a>
            <button type="submit" class="btn btn-danger">Eliminar</button>
            
            </form>
          </td>
                                        
                                             </tr>
                                              @endforeach
                                        </tbody>
                                    </table><br>
			@if (isset($crit))
            <a href="{{route('pdfventas',['crit'=>$crit])}}"><button type="button" class="btn btn-primary">Generar reporte PDF</button></a>
            <a href="{{route('excelventas',['crit'=>$crit])}}"><button type="button" class="btn btn-warning">Generar reporte EXCEL</button></a>
            @endif                   </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end data table  -->
                    <!-- ============================================================== -->
                </div>

            </div>

  
@endsection