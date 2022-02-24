@extends('layouts.template')

@section('title', 'Pacientes')

@section('content')
<style>
  .card-body{
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.25);
  }
  h1{
    margin:0px 0px 80px 0px;
    text-align: center;
    font-size: 35px;
    font-family: Arial, Helvetica, sans-serif;
    color:#555555;
  }
  .container{
    display: flex;
    justify-content: center;
    flex-direction: column;
    margin:100px auto;  
  }
  .form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: #555555;
    outline: 0;
    box-shadow: none;
}
table.dataTable{
  margin-bottom: 20px !important;
}

.navbar{
  padding:1rem 1rem;
}

</style>
<div class="container">
    <h1>Pacientes agendados <i class="fa-solid fa-user-doctor"></i></h1>
    <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Nome</th>
                <th>Data</th>
                <th>Horário</th>
                <th>Médico</th>
                <th>Ações</th>
              </tr>
            </thead>
      
            <tbody>
               @foreach($pacientes as $paciente)
              <tr>
                  <td>{{$paciente->nome_paciente}}</td>
                  <td>{{$paciente->data_agendamento}}</td>
                  <td>{{$paciente->hora_agendamento}}</td>
                  <td>{{$paciente->medico_agendamento}}</td>
                  <td style="display: flex; justify-content: space-evenly;">
                    <a title="Detalhes" href={{Route('pacientes-descricao', $paciente->id)}}><i class="fa-solid fa-eye text-primary"></i></a>
                    <a title="Editar agendamento" href={{Route('pacientes-edit', $paciente)}}><i class="fa-solid fa-pen-to-square text-secondary"></i></a>
                    <a title="Excluir agendamento" href="{{Route('pacientes-modal', $paciente->id)}}">
                      <i class="fa-solid fa-trash-can text-danger"></i>
                    </a>
                  </td>
              </tr>
              @endforeach
            </tbody>
        </table>
      </div>
    </div>
  </div>
    
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Deletar Registro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Deseja realmente excluir este registro?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <form action="{{Route('pacientes-delete', $paciente)}}" method="post">
                  @csrf
                  @method('delete')
                  <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
              </div>
            </div>
          </div>
        </div>

        @if(@$id != "")
          <script>
            $('#exampleModal').modal('show');
          </script>
        @endif
   @endsection
