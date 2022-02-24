@extends('layouts.template')

@section('title', 'Editar agendamento')
<style>
     .container{
        margin-top: 50px;
        padding:30px;
    }

    h1{
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 22px;
        font-weight: 500;
        font-family: Arial, Helvetica, sans-serif;
        padding:30px 0px 50px 0px;
        color:#555555;
    }

    .fa-marker{
        margin-left: 15px;
    }

    form{
        padding:0px 30px;
    }

    .form-control:focus {
        color: #495057;
        background-color: #fff;
        border-color: #555555 !important;
        outline: 0;
        box-shadow: none !important;
    }
    .btn-primary{
        font-family: Arial, Helvetica, sans-serif;
        background-color:transparent !important;
        color:#F86767 !important; 
        border-color: #F86767 !important;
        width:15%;
    }
</style>

@section('content')
<div class="container">
    <h1>Editar Paciente <i class="fa-solid fa-marker"></i></h1>
    <form method="post" action={{Route('pacientes-editar', $paciente)}}>
        @csrf
        @method('put')
        <div class="row">
            <div class="form-group col-6">
                <label>Nome</label>
                <input type="text" class="form-control" name="nome"  required value={{$paciente->nome_paciente}} >
              </div>
              <div class="form-group col-6">
                <label for="exampleInputPassword1">Data</label>
                <input oninput="mascara(this, 'data')" type="text" class="form-control" name="data"  required value={{$paciente->data_agendamento}} >
              </div>
              <div class="form-group col-6">
                  <label for="exampleInputPassword1">Horário</label>
                  <input oninput="mascara(this, 'horario')" type="text" class="form-control" name="horario" required value={{$paciente->hora_agendamento}} >
              </div>
              <div class="form-group col-6">
                <label for="">Médico</label>
                <input type="text" class="form-control" name="medico"  required value={{$paciente->medico_agendamento}} >
              </div>
              <div class="form-group col-6">
                  <label for="exampleInputPassword1">Tipo</label>
                  <input type="text" class="form-control" name="tipo" required value={{$paciente->tipo_consulta}} >
              </div>
             <div class="col-12">
                <button type="submit" class="btn btn-primary">Editar</button>
             </div>
        </div>
    </form>
</div>
@endsection
<script>
    function mascara(i,t){
    var v = i.value;
    
    if(isNaN(v[v.length-1])){
        i.value = v.substring(0, v.length-1);
        return;
    }
    
    if(t == "data"){
        i.setAttribute("maxlength", "10");
        if (v.length == 2 || v.length == 5) i.value += "-";
    }

    if(t == "horario"){
        i.setAttribute("maxlength", "5");
        if (v.length == 2) i.value += ":";
    }
}
</script>