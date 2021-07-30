<?php

namespace App\Http\Controllers;

use App\Models\Servicios;
use Illuminate\Http\Request;
use App\Models\User;

class ServiciosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function TblServicios()
    {
        if(auth()->user()->tipo == 'admin'){
            $Servicio = Servicios::all();
            return view('Admin/Servicios/TblServicios',['Servicios' => $Servicio]);
        }else{
            return view('Index');
        }
    }

    public function Frm_AddServicios()
    {
        if(auth()->user()->tipo == 'admin'){
            return view("Admin/Servicios/AgregarServicio");
        }else{
            return view('Index');
        }
    }

    public function AddServicios(Request $request)
    {
        if(auth()->user()->tipo == 'admin'){
            $data = request()->validate([
                'Servicio' => 'required',
                'Descripcion' => 'required',
                'Costo' => 'required',
                'file' =>'required'
            ]);
    
            $Nombre = request('Servicio');
            $Descripcion = request('Descripcion');
            $Costo = request('Costo');
            $File = request('file');
            $Disponibilidad = request('Disponibilidad');
    
            $fileNameWithTheExtension = request('file')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithTheExtension, PATHINFO_FILENAME);
            $extension = request('file')->getClientOriginalExtension();
            $newFileName = $fileName .'.' . $extension;
            $path = request('file')->storeAs('public/Img/Img_Servicios', $newFileName);
    
            $Servicio = new Servicios();
    
            $Servicio->Nombre_Servicio = $Nombre;
            $Servicio->Descripcion = $Descripcion;
            $Servicio->Costo = $Costo;
            $Servicio->Img = $newFileName;

            $Servicio->save();
    
            return redirect('/TblServicios'); 
        }else{
            return view('Index');
        }
        
    }

    public function Frm_EditServicios($id)
    {
        if(auth()->user()->tipo == 'admin'){
            $Servicio = Servicios::findorFail($id);
            return view("Admin/Servicios/EditarServicio")->with(['Servicio' => $Servicio]);
        }else{
            return view('Index');
        }
    }

    public function EditServicios(Request $request, $id)
    {
        if(auth()->user()->tipo == 'admin'){
            $data = request()->validate([    //Rescate de datos, validacion de requeridos y tipos 
                'Servicio' => 'required',
                'Descripcion' => 'required',
                'Costo' => 'required',
                'file' =>'required'
            ]);
    
            $Nombre = request('Servicio');
            $Descripcion = request('Descripcion');
            $Costo = request('Costo');
            $File = request('file');
    
            $fileNameWithTheExtension = request('file')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithTheExtension, PATHINFO_FILENAME);
            $extension = request('file')->getClientOriginalExtension();
            $newFileName = $fileName .'.' . $extension;
            $path = request('file')->storeAs('public/Img/Img_Servicios', $newFileName);
    
            $Servicio = Servicios::findorFail($id);
            
            $Servicio->Nombre_Servicio = $Nombre;  //Guarda el dato obtenido en la columna selecciona de la BD
            $Servicio->Descripcion = $Descripcion;
            $Servicio->Costo = $Costo;
            $Servicio->Img = $newFileName;
    
            $Servicio->save();//Guarda los datos
    
    
            return redirect('/TblServicios'); 
        }else{
            return view('Index');
        }
    }

    public function DeleteMascota($id)
    {
        $Servicio = Servicios::find($id);
        
        $Servicio->delete();
        return redirect('/TblServicios');
    }


}
