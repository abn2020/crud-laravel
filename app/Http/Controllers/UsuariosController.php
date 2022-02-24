<?php

namespace App\Http\Controllers;

use App\Paciente;
use App\Usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function login(Request $request)
    {
        $usuario = $request->usuario;
        $senha = $request->senha;

        $usuarios = usuario::where('usuario', '=', $usuario)->where('senha', '=', $senha)->first();
        if (@$usuarios->idusuario != null) {
            @session_start();
            $_SESSION['idusuario'] = $usuarios->idusuario;
            $_SESSION['usuario'] = $usuarios->usuario;
            $_SESSION['nivel'] = $usuarios->nivel;
            $pacientes = Paciente::paginate();
            return view('pacientes.index', ['pacientes' => $pacientes]);
        } else {
            echo "<script language='javascript'> window.alert('Dados Incorretos!')</script>";
            return view('home');
        }
    }

    public function logout()
    {
        @session_start();
        @session_destroy();
        return view('home');
    }
}
