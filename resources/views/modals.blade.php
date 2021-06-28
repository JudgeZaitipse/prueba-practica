<div class="modal fade" id="modal_editar" role="dialog" aria-labelledby="modal_editar" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Actualizar Datos </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form id="form_actualizar" action="{{ route('updateFactura') }}" data-toggle="validator" role ="form" enctype="multipart/form-data">
                <div class="modal-body">
                    {{ csrf_field() }}
                    <input type="hidden" id="id_cliente" name="id_cliente">
                    <input type="hidden" id="vehiculo_id" name="vehiculo_id">
                <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title text-center">INFORMACION PERSONAL</h4>
                  <p class="card-category">Por favor llene todos los campos </p>
                </div>
                {{-- Informacion Personal --}}
                    <div class="card-body">
                       <div class="row">
                        {{-- Nombre Cliente --}}
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="bmd text-dark">Nombre:</label>
                              <input type="text" name="nombre" onkeypress="return val_numeros(event)" maxlength="50" id="nombre_cliente" class="form-control" required>
                            </div>
                          </div>
                          {{-- Apellido Cliente --}}
                          <div class="col-md-6">
                            <div class="form-group">
                               <label class="bmd text-dark">Apellido:</label>
                              <input type="text" onkeypress="return val_texto(event)" maxlength="50" name="apellido" id="apellido_cliente"  class="form-control" required>
                            </div>
                          </div>
                        </div>

                        <div class="dropdown-divider"></div>
                        <div class="row">
                         {{-- Direccion Cliente  --}}
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="bmd text-dark">Dirección:</label>
                              <input type="text" id="direcion-cliente" name="direcion"  maxlength="80" class="form-control" required>
                            </div>
                          </div>
                          {{-- Cedula Cliente --}}
                          <div class="col-md-6">
                            <div class="form-group">
                               <label class="bmd text-dark">cedula:</label>
                              <input type="text"onkeypress="return val_numeros(event)"  maxlength="15" id="cedula-cliente" name="cedula" class="form-control" required>
                            </div>
                          </div>
                        </div>

                        <div class="dropdown-divider"></div>
                        <div class="row">
                        {{-- Telefono Cliente  --}}
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="bmd text-dark">Telefono:</label>
                              <input type="text" onkeypress="return val_numeros(event)" maxlength="15"  id="telefono-cliente" name="telefono" class="form-control" required>
                            </div>
                          </div>
                          {{-- celular cliente --}}
                          <div class="col-md-6">
                            <div class="form-group">
                               <label class="bmd text-dark">celular:</label>
                              <input type="text" onkeypress="return val_numeros(event)" maxlength="15"  id="celular-cliente" name="celular"  class="form-control" required>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          {{-- Correo --}}
                          <div class="col-md-12">
                            <div class="form-group">
                              <label class="bmd text-dark">Correo:</label>
                              <input type="email"  name="correo" class="form-control" maxlength="90" id="correo-cliente" required>
                            </div>
                          </div>
                        </div>
                     </div>
                    </div>
                    {{-- Informacion Vehuculo --}}
                    <div class="card mt-5">
                            <div class="card-header card-header-success">
                              <h4 class="card-title">VEHICULO</h4>
                              <p class="card-category">Por favor llene todos los campos </p>
                            </div>
                        <div class="card-body">
                              <div class="row mt-4">
                                {{-- placa --}}
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="bmd text-dark">Placa:</label>
                                    <input type="text" id="vehiculo-placa"  name="placa" maxlength="9" class="form-control" required>
                                  </div>
                                </div>
                                {{-- marca--}}
                                <div class="col-md-6">
                                  <div class="form-group">
                                   <label class="bmd text-dark">Marca:</label>
                                   <input type="text"onkeypress="return val_texto(event)" id="vehiculo-marca" maxlength="10" name="marca" class="form-control" required>
                                 </div>
                               </div>
                             </div>

                             <div class="dropdown-divider"></div>
                             <div class="row">
                                  {{-- modelo --}}
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd text-dark">Modelo:</label>
                                      <input type="text" onkeypress="return val_numeros(event)" name="modelo"  maxlength="10" class="form-control" id="vehiculo-modelo" required>
                                    </div>
                                  </div>
                                  {{-- color --}}
                                  <div class="col-md-6">
                                    <div class="form-group">
                                       <label class="bmd text-dark">Color:</label>
                                      <input type="text"onkeypress="return val_texto(event)" id="vehiculo-color" maxlength="10" name="color" class="form-control" required>
                                    </div>
                                  </div>
                             </div>
                             <div class="row">
                                  {{-- modelo --}}
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label class="bmd text-dark">Valor:</label>
                                      <input type="text" onkeypress="return val_numeros(event)" maxlength="10" id="vehiculo-valor" name="valor" class="form-control" >
                                    </div>
                                  </div>
                             </div>
                             <div class="mt-4"></div>
                            <div class="col-md-12 mt-4">
                                <button type="submit" class="btn btn-success pull-right" >Actualizar</button>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>