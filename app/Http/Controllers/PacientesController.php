<?php

namespace App\Http\Controllers;

use App\Paciente;
use Illuminate\Http\Request;

class PacientesController extends Controller
{
    public function index()
    {
        $pacientes = Paciente::paginate();
        return view('pacientes.index', ['pacientes' => $pacientes]);
    }

    public function create()
    {
        return view('pacientes.create');
    }

    public function insert(Request $request)
    {
        $paciente = new Paciente();
        $paciente->nome_paciente = $request->nome;
        $paciente->data_agendamento = $request->data;
        $paciente->hora_agendamento = $request->horario;
        $paciente->medico_agendamento = $request->medico;
        $paciente->tipo_consulta = $request->tipo;
        $paciente->save();

        return redirect()->route('pacientes');
    }

    public function show($id)
    {
        $paciente = Paciente::find($id);
        return view('pacientes.show', ['paciente' => $paciente]);
    }

    public function edit(paciente $paciente)
    {
        return view('pacientes.edit', ['paciente' => $paciente]);
    }

    public function editar(Request $request, paciente $paciente)
    {
        $paciente->nome_paciente = $request->nome;
        $paciente->data_agendamento = $request->data;
        $paciente->hora_agendamento = $request->horario;
        $paciente->medico_agendamento = $request->medico;
        $paciente->tipo_consulta = $request->tipo;
        $paciente->save();

        return redirect()->route('pacientes');
    }

    public function delete(paciente $paciente)
    {
        $paciente->delete();
        return redirect()->route('pacientes');
    }

    public function modal($id)
    {
        $pacientes = Paciente::paginate();
        return view('pacientes.index', ['pacientes' => $pacientes, 'id' => $id]);
    }
}
