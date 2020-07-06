@extends('index')

@section('conteudo')

        <div class="content p-1">
            <div class="list-group-item">
                <div class="d-flex">
                    <div class="mr-auto p-2">
                        <h2 class="display-4 titulo">Relatórios</h2>
                    </div>
                    <a href="{{url("/")}}">
                        <div class="p-2">
                            <button type="button" class="btn btn-outline-success">Novo Auto</button>
                        </div>
                    </a> 
                </div>                
                <div class="table-responsive">
                    <table class="table table-hover table-striped table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center d-none d-lg-table-cell text-center">PROTOCOLO</th>
                                <th class="text-center">INFRAÇÃO</th>
                                <th class="d-none d-lg-table-cell text-center">FISCAL</th>
                                <th class="d-none d-lg-table-cell text-center">DATA</th>
                                <th class="text-center">STATUS</th>
                                <th class="text-center">CHAMADO</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="text-center d-none d-lg-table-cell text-center">1</th>
                                <td class="text-center">POL. SONORA</td>
                                <td class="d-none d-lg-table-cell text-center">João</td>
                                <td class="d-none d-lg-table-cell text-center">05/07/2020</td>
                                <td class="text-center text-success letra_col">Atendido</td>
                                <th class="text-center">
                                    <button type="button" class="btn btn-outline-primary btn-sm">Visualizar</button>
                                    <button type="button" class="btn btn-outline-warning btn-sm">Imprimir</button>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection


