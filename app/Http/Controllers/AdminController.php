<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Mascotas;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function TblMascotas()
    {
        if(auth()->user()->tipo == 'admin'){
            $Mascotas = DB::table('Users')
                ->join('Mascotas', 'Users.id', '=', 'Mascotas.id_cliente')
                ->select('Users.name', 'Users.email', 'Users.telefono','Mascotas.nombre_mascota', 'Mascotas.imagen')
                ->get();

            return view('Admin/Mascotas/TblMascotas',['Mascotas' => $Mascotas]);
        }else{
            return view('Index');
        }
    }

    public function TblUsuarios()
    {
        if(auth()->user()->tipo == 'admin'){
            $Usuarios = User::get()->where('tipo', '===', 'usuario');

            return view('Admin/Usuarios/TblUsuarios',['Usuarios' => $Usuarios]);
        }else{
            return view('Index');
        }
    }

    

}
