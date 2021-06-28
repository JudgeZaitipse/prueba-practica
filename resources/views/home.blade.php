@extends('layouts.app')

@section('content')
<div class="content mt-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title ">FACTURAS</h4>
                  <p class="card-category">Lista de Respuestas</p>
                </div>
                <div class="card-body">
                <div class="material-datatables">
                 <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%" >
                        <thead>
                            <tr>
                                <th>N° Registro:</th>
                                <th>Cliente:</th>
                                <th>Vehiculo:</th>
                                <th>Estado:</th>
                                <th>Usuario:</th>
                                <th>Fecha de Registro:</th>
                                <th>Acciones:</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($facturas as $lista) 
                            <tr>
                                <td>{{ $lista->id}}</td>
                                <td>{{ $lista->cliente->nombre }} {{ $lista->cliente->apellido }}</td>
                                <td>{{ $lista->vehiculo->placa }}</td>
                                <td>{{ $lista->estado->nombre }}</td>
                                <td>{{ $lista->usuario->name }}</td>
                                <td>{{ date_format($lista->created_at,'d-m-Y') }}</td>
                                <td>
                                  <a class="btn btn-success text-white del-fact" 
                                      {{-- data cliente  --}}
                                      data-id-cliente="{{ $lista->cliente->id }}"
                                      data-nombre-cliente="{{ $lista->cliente->nombre }}" 
                                      data-apellido-cliente="{{ $lista->cliente->apellido }}"
                                      data-cedula-cliente="{{ $lista->cliente->cedula}}" 
                                      data-direcion-cliente="{{ $lista->cliente->direcion}}" 
                                      data-telefono-cliente="{{ $lista->cliente->telefono }}" 
                                      data-celular-cliente="{{ $lista->cliente->celular}}" 
                                      data-correo-cliente="{{ $lista->cliente->correo }}"
                                      {{-- data Vehiculo   --}}
                                      data-vehiculo-id="{{ $lista->vehiculo->id }}"
                                      data-vehiculo-placa="{{ $lista->vehiculo->placa }}"
                                      data-vehiculo-marca="{{ $lista->vehiculo->marca }}"
                                      data-vehiculo-modelo="{{ $lista->vehiculo->modelo }}"
                                      data-vehiculo-color="{{ $lista->vehiculo->color }}"
                                      data-vehiculo-valor="{{ $lista->vehiculo->valor }}"
                                      ><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                    <form id="form_eliminar" action="{{ route('deleteFactura') }}"  >
                                      @csrf
                                      <input type="hidden" name="factura_id" value="{{ $lista->id }}">
                                      <button type="submit" class="btn btn-danger text-white"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                    </form>
                                </td> 
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @include('modals')
      <script src="{{ asset('js/factura.js') }}"></script>
@endsection
