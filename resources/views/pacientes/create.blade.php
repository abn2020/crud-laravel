@extends('layouts.template')

@section('title', 'Novo agendamento')
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

    .fa-book{
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
        color:#58BB62 !important; 
        border-color: #58BB62 !important;
        width:15%;
    }
</style>

@section('content')
<div class="container">
    <h1>Agendar Paciente <i class="fa-solid fa-book"></i></h1>
    <form id="formValidate" method="post" action={{Route('pacientes-agendar')}}>
        @csrf
        <div class="row">
            <div class="form-group col-6">
                <label>Nome</label>
                <input type="text" class="form-control" name="nome" id="nome"  maxlength="15" required>
              </div>
              <div class="form-group col-6">
                <label for="exampleInputPassword1">Data</label>
                <input oninput="mascara(this, 'data')" type="text" class="form-control" name="data" id="data" placeholder="Ex:00-00-0000" required>
              </div>
              <div class="form-group col-6">
                  <label for="exampleInputPassword1">Horário</label>
                  <input oninput="mascara(this, 'horario')" type="text" class="form-control" name="horario" placeholder="Ex:00:00" required>
              </div>
              <div class="form-group col-6">
                <label for="">Médico</label>
                <input type="text" class="form-control" name="medico"  maxlength="15" required>
              </div>
              <div class="form-group col-6">
                  <label for="exampleInputPassword1">Tipo</label>
                  <input type="text" class="form-control" name="tipo"  maxlength="15" required>
              </div>
             <div class="col-12">
                <button type="submit" class="btn btn-primary">Agendar</button>
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

