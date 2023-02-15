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
                            <h2 class="pageheader-title"> Modifica Cliente</h2>
                        
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
             
                <div class="row">
                  
                         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Modifica Cliente</h5>
                                <div class="card-body">
                                    <form action="{{route('modificacli2', $cli->id)}}" method="post">
                                                {{ csrf_field() }}
                                                      {{ method_field('PUT') }}
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Nombre</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="Ingresa tu Nombre"  name="nombre" class="form-control" value="{{$cli->nombre}}">
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Apellido Paterno</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="Ingresa el Apellido Paterno"  name="appaterno" class="form-control" value="{{$cli->appaterno}}">
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Apellido  Materno</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="Ingresa el Apellido Materno"  name="apmaterno" class="form-control" value="{{$cli->apmaterno}}">
                                            </div>
                                        </div>

                               
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">E-Mail</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="email" required="" placeholder="Ingresa tu dirección e-mail" name="email" class="form-control" value="{{$cli->email}}">
                                            </div>
                                        </div>

                                          <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Telefono</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="Ingresa un Numero de Telefono"  name="telefono" class="form-control" value="{{$cli->telefono}}">
                                            </div>
                                        </div>
                                          <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Dirección</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="Ingresa la direccion"  name="direccion" class="form-control" value="{{$cli->direccion}}">
                                            </div>
                                        </div>
                                        <div class="form-group row text-right">
                                            <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                <button type="submit" class="btn btn-space btn-primary">Guardar</button>
                                                
                                            </div>
                                        </div>
                                    </form>
                                    <a href="{{ route('consultausu') }}"><button class="btn btn-space btn-secondary">Cancelar</button></a>
                                </div>
                            </div>
                        </div>
                </div>

            </div>

  
@endsection