<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Mascotas;
use App\Models\Servicios;

use Illuminate\Http\Request;


class ClienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Frm_AddMascota()
    {
        if(auth()->user()->tipo == 'usuario'){
            return view("Clientes/AgregarMascota");
        }else{
            return view('Index');
        }
    }

    public function AddMascota(Request $request)
    {
        if(auth()->user()->tipo == 'usuario'){
            $data = request()->validate([
                'Nombre' => 'required',
                'Descripcion' => 'required',
                'Edad' => 'required',
                'Peso' => 'required',
                'Raza' => 'required',
                'file' =>'required'
            ]);
            
            $id_cliente = auth()->id();
            $Nombre = request('Nombre');
            $Descripcion = request('Descripcion');
            $Edad = request('Edad');
            $Peso = request('Peso');
            $Raza = request('Raza');
            $File = request('file');
    
            $fileNameWithTheExtension = request('file')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithTheExtension, PATHINFO_FILENAME);
            $extension = request('file')->getClientOriginalExtension();
            $newFileName = $fileName .'.' . $extension;
            $path = request('file')->storeAs('public/Img/Img_Mascotas', $newFileName);
    
            $Mascota = new Mascotas();
    
            $Mascota->nombre_mascota = $Nombre;
            $Mascota->Descripcion = $Descripcion;
            $Mascota->edad = $Edad;
            $Mascota->peso = $Peso;
            $Mascota->raza = $Raza;
            $Mascota->imagen = $newFileName;
            $Mascota->id_cliente = $id_cliente;

            $Mascota->save();
    
            return redirect('Sesion'); 
        }else{
            return view('Index');
        }
        
    }


}
