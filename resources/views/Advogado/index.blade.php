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
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">Registro OAB</th>
            <th scope="col">Ação</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($advogados as $Advogado)
                {{-- {{dd($advogados)}} --}}
                <th>{{ $Advogado->id }}</th>
                <td>{{$Advogado->nome}}</td>
                <td>{{$Advogado->registro_oab}}</td>
                <td> 

                    {{ Form::open([ 'method'  => 'delete', 'route' => [ 'advogado.destroy', $Advogado->id ] ]) }}
                    @csrf   
                    {{ Form::submit('Excluir',['class' => 'btn btn-warning']) }}
                    {{ Form::close() }}



                    <a type="submit" class="btn btn-warning ">
                        <i class="material-icons">border_color</i> 
                    </a> 
                    <a href="/edit" class="btn btn-danger ">
                        <i class="material-icons">delete_sweep</i> 
                    </a>
                   
                </td>
                </tr>                
                @endforeach
        </tbody>
    </table>

   

</div>



    
@endsection