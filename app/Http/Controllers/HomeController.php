<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicios;
use App\Models\Mascotas;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $Mascotas = Mascotas::get()->count();
        $Usuarios = User::get()->where('tipo', '===', 'usuario')->count();
        return view('Index')->with(['Mascotas' => $Mascotas])->with(['Usuarios' => $Usuarios]);
    }

    public function Servicios()
    {
        $Servicio = Servicios::all();
        return view('Publico/Servicios',['Servicios' => $Servicio]);
    }

    public function Contacto(){return view('Publico/Contacto');}

    public function Acerca(){return view('Publico/Acerca');}

    public function AllServicios($id){
        $Servicios = Servicios::get()->where("id", 2);
        return $Servicios;
    }

}
