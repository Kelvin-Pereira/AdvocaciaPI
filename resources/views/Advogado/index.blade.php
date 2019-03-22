@extends('layouts.app')

@section('conteudo')
<br>
<div class="main main-raised">
    <h1 class="text-center">Lista De Advogados</h1><hr>

    {{-- link para Adicionar Novo Advogado --}}
    <div class="raw text-right">
        <a href="/CadastarAdvogado" class="btn btn-info">
            <i class="material-icons">add</i> Add Advogado 
        </a>
    </div>

    {{-- Listagem de Advogados --}}
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Registro OAB</th>
            <th scope="col">Acão</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th>1</th>
            <td>Ricardo</td>
            <td>1231223</td>
            <td>  {{-- edita --}}
                    <a href="#" class="btn btn-warning ">
                        <i class="material-icons">border_color</i> 
                    </a> 
                    {{-- Excluir --}}
                    <a href="#" class="btn btn-danger ">
                            <i class="material-icons">delete_sweep</i> 
                    </a></td>
            </tr>
        </tbody>
    </table>

</div>
    
@endsection