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
                            <h2 class="pageheader-title"> Nuevo Venta</h2>
                        
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
             
                <div class="row">
                  
                         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Nuevo Venta</h5>
                                <div class="card-body">
                                    <form action="{{ route('nuevoven') }}" method="post">
                                          {{ csrf_field() }}
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Venta</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="Ingresa la Venta"  name="venta" class="form-control">
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Cantidad</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="Ingresa la Cantidad de la  Venta"  name="cantidad" class="form-control">
                                            </div>
                                        </div>

                                          <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Precio</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="Ingresa el Precio de la  Venta"  name="precio" class="form-control">
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Caracteristica</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="Ingresa las Caracteristicas de la  Venta"  name="caracteristicas" class="form-control">
                                            </div>
                                        </div>

                                          <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Descripcion</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="Ingresa la Descripcion  de la  Venta"  name="descripcion" class="form-control">
                                            </div>
                                        </div>

                                          <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Cliente</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="Ingresa el Cliente  de la  Venta"  name="cliente" class="form-control">
                                            </div>
                                        </div>

                               
                                      
                                        <div class="form-group row text-right">
                                            <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                <button type="submit" class="btn btn-space btn-primary">Guardar</button>
                                                
                                            </div>
                                        </div>
                                    </form>
                                    <a href="{{ route('consultaven') }}"><button class="btn btn-space btn-secondary">Cancelar</button></a>
                                </div>
                            </div>
                        </div>
                </div>

            </div>

  
@endsection