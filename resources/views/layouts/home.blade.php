@extends('layouts.app')

@section('content')
<div class="content mt-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">IMPACTO DE LA EMPRESA SOBRE EL TRABAJADOR, FAMILIA Y SOCIEDAD</h4>
                  <p class="card-category">Lista de Respuestas</p>
                </div>
                <div class="col-12 mt-2">
                  <div class="row float-right pr-5 pt-2">
                    <h4>
                        Descargar - 
                        {{-- <a href="{{ route('descargar') }}"><i class="material-icons">archive</i></a>     --}}
                    </h4>
                  </div>
                </div>
                <div class="card-body">
                <div class="material-datatables">
                 <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%" >
                        <thead>
                            <tr>
                                <th>N° Registro:</th>
                                <th>Documento:</th>
                                <th>Nombre:</th>
                                <th>Nivel Cargo:</th>
                                <th>Sector Económico:</th>
                                <th>Fecha de Registro:</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($lista_de_trabajadores as $lista) 
                            <tr>
                                <td>{{ $lista->id}}</td>
                                <td>{{ $lista->cedula }}</td>
                                <td>{{ $lista->nombre }}</td>
                                <td>{{ $lista->nivel_cargo }}</td>
                                <td>{{ $lista->sector_economico }}</td>
                                <td>{{ date_format($lista->created_at,'d-m-Y') }}</td>
                                {{--<td>
                                 <form  action="{{ route('show') }}" method="POST" class="show-from">
                                    @csrf
                                    <a>
                                      <h4>
                                        <button type="submit" class="color_bt">
                                         <input type="hidden"  name="id" value="{{ $lista->id }}">
                                         <i class="fas fa-search-plus"></i> 
                                        </button>
                                      </h4>
                                    </a>
                                </form>
                                </td> --}}
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
      <script>
    $(document).ready(function() {
      $('#datatables').DataTable({
        "pagingType": "full_numbers",
        "lengthMenu": [
          [10, 25, 50, -1],
          [10, 25, 50, "Todo"]
        ],
        responsive: true,
        language: {
          "sProcessing":     "Procesando...",
              "sLengthMenu":     "Mostrar _MENU_ registros",
              "sZeroRecords":    "No se encontraron resultados",
              "sEmptyTable":     "Ningún dato disponible en esta tabla",
              "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
              "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
              "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
              "sInfoPostFix":    "",
              "sSearch":         "Buscar:",
              "sUrl":            "",
              "sInfoThousands":  ",",
              "sLoadingRecords": "Cargando...",
              "oPaginate": {
                  "sFirst":    "Primero",
                  "sLast":     "Último",
                  "sNext":     "Siguiente",
                  "sPrevious": "Anterior"
              },
              "oAria": {
                  "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                  "sSortDescending": ": Activar para ordenar la columna de manera descendente"
              }
        }
      });
    });
  </script>
@endsection
