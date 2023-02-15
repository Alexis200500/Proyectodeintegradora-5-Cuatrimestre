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
                            <h2 class="pageheader-title"> Modifica Usuario</h2>
                        
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
             
                <div class="row">
                  
                         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Modifica Usuario</h5>
                                <div class="card-body">
                                    <form action="{{route('modificausu2', $usu->idusuario)}}" method="post">
                                                {{ csrf_field() }}
                                                      {{ method_field('PUT') }}
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Nombre</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="Ingresa tu Nombre"  name="nombre" class="form-control" value="{{$usu->nombre}}">
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Usuario</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="Ingresa el Nombre de Usuario"  name="usuario" class="form-control" value="{{$usu->usuario}}" >
                                            </div>
                                        </div>

                               
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">E-Mail</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="email" required="" placeholder="Ingresa tu dirección e-mail" name="email" class="form-control" value="{{$usu->email}}">
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Password</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="password" required="" name="password" placeholder="Ingresa tu Contraseña" class="form-control" value="{{$usu->password}}">
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