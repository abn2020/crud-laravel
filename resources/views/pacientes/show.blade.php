@extends('layouts.template')

@section('title', 'Paciente')
<style>
    .fa-rotate-left{
        font-size: 30px;
        margin-top: 20px;
    }

    .fa-rotate-left:hover{
        text-decoration: none;
    }
</style>
@section('content')
<div class="jumbotron">
    <h3 class="display-4">Paciente: {{$paciente->nome_paciente}}</h3>
    <h3>Data: {{$paciente->data_agendamento}}</h3>
    <h3>Horário: {{$paciente->hora_agendamento}}</h3>
    <hr class="my-4">
    <p>Tipo consulta: 
        @if($paciente->tipo_consulta) 
            {{$paciente->tipo_consulta}} 
        @else 
            Padrão
        @endif          
    </p>
    <a class="fa-solid fa-rotate-left" title="Voltar" href={{Route('pacientes')}} role="button"></a>

  </div>
@endsection
