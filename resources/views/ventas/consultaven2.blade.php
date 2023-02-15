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


                        <div class="card">

                   
                            <div class="card-header">
                               <h2><a href="{{ route('altaven') }}"><button type="button" class="btn btn-success float-right">+ Registrar Usuario</button></a></h2>
                            </div>
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table id="" class="table table-striped table-bordered" style="width:100%">
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
          <a href="{{route('modificaven', $ven->id)}}"><button type="button" class="btn btn-primary">Modificar</button></a>
            <button type="submit" class="btn btn-danger">Eliminar</button>
            
            </form>
          </td>
                                        
                                             </tr>
                                    
                                        </tbody>
                                    </table>
                                       <div class="card-header">
                               <h2><a href="{{ route('consultaven') }}"><button type="button" class="btn btn-danger float-right">Regresar</button></a></h2>
                            </div>
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