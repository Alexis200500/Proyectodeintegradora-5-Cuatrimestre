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


                        <div class="card">

                   
                            <div class="card-header">
                               <h2><a href="{{ route('altacli') }}"><button type="button" class="btn btn-success float-right">+ Registrar Cliente</button></a></h2>
                            </div>
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table id="" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                               
                                                <th>ID</th>
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
                                               
    
                                            <tr>
                                              
                                            <th>{{$cli->id}}</th>
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

          <a href="{{route('modificacli', $cli->id)}}"><button type="button" class="btn btn-primary">Modificar</button></a>
            <button type="submit" class="btn btn-danger">Eliminar</button>
            
            </form>
          </td>
                                        
                                             </tr>
                                    
                                        </tbody>
                                    </table>
                                       <div class="card-header">
                               <h2><a href="{{ route('consultacli') }}"><button type="button" class="btn btn-danger float-right">Regresar</button></a></h2>
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