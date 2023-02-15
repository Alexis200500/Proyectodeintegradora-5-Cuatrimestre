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
                                    <form action="{{route('modificapro2', $pro->id)}}" method="post">
                                                {{ csrf_field() }}
                                                      {{ method_field('PUT') }}
                                     <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Producto</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="Ingresa tu Nombre del Producto"  name="producto" class="form-control" value="{{$pro->producto}}">
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Serie</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="Ingresa la Serie del Producto"  name="serie" class="form-control" value="{{$pro->serie}}">
                                            </div>
                                        </div>
                                          <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Caracteristica</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="Ingresa las Caracteristicas del Producto"  name="caracteristicas" class="form-control" value="{{$pro->caracteristicas}}">
                                            </div>
                                        </div>
                                          <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Falla</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="Ingresa las Fallas del Producto"  name="falla" class="form-control" value="{{$pro->falla}}">
                                            </div>
                                        </div>
                                          <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Cantidad</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="Ingresa las Cantidad del Producto"  name="cantidad" class="form-control" value="{{$pro->cantidad}}">
                                            </div>
                                        </div>
                                           <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Precio</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="Ingresa el Precio del Producto"  name="precio" class="form-control" value="{{$pro->precio}}">
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