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
                            <h2 class="pageheader-title">Producto</h2>
                        
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
                               <h2><a href="{{ route('altapro') }}"><button type="button" class="btn btn-success float-right">+ Registrar Producto</button></a></h2>
                            </div>
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table id="" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                               
                                               <th>Producto</th>
                                                <th>Serie</th>
                                                <th>Caracteristica</th>
                                                <th>Falla</th>
                                                <th>Cantidad</th>
                                                <th>Precio</th>
                                                <th>Operaciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                               
    
                                            <tr>
                                              
                                              <th>{{$pro->producto}}</th>
                                               <th>{{$pro->serie}}</th>
                                            <th>{{$pro->caracteristicas}}</th>
                                            <th>{{$pro->falla}}</th>
                                            <td>{{$pro->cantidad}}</td>
                                            <td>{{$pro->precio}}</td>
                                             <td>
    
         <form action="{{ route('eliminapro',['id' => $pro ->id])}}" method="POST">
           {{ csrf_field() }}
           {{ method_field('DELETE') }}

          <a href="{{route('modificapro', $pro->id)}}"><button type="button" class="btn btn-primary">Modificar</button></a>
            <button type="submit" class="btn btn-danger">Eliminar</button>
            
            </form>
          </td>
                                        
                                             </tr>
                                    
                                        </tbody>
                                    </table>
                                       <div class="card-header">
                               <h2><a href="{{ route('consultapro') }}"><button type="button" class="btn btn-danger float-right">Regresar</button></a></h2>
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