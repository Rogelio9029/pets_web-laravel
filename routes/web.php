<?php

use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'prevent-back-history'],function(){

    //Publico
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/Servicios', [App\Http\Controllers\HomeController::class, 'Servicios'])->name('Servicios');
    Route::get('/Contacto', [App\Http\Controllers\HomeController::class, 'Contacto'])->name('Contacto');
    Route::get('/Acerca', [App\Http\Controllers\HomeController::class, 'Acerca'])->name('Acerca');

    //Auth Laravel
    Auth::routes(['verify' => true]);

    Route::group(['middleware' => 'verified'], function(){

        //Sesion
        Route::get('Sesion', [App\Http\Controllers\SesionController::class, 'Sesion'])->name('Sesion');

        //Mascotas.Clientes
        Route::get('/Frm_AddMascota', [App\Http\Controllers\ClienteController::class, 'Frm_AddMascota'])->name('Frm_AddMascota');
        Route::post('/AddMascota', [App\Http\Controllers\ClienteController::class, 'AddMascota'])->name('AddMascota');

        //Pagos
        Route::get('/Buying/{id}', [App\Http\Controllers\PayPalController::class, 'Frm_Paypal'])->name('Buying');

    }); //Verificar Email Real

    //Servicios.Admin
    Route::get('/TblServicios', [App\Http\Controllers\ServiciosController::class, 'TblServicios'])->name('TblServicios');
    Route::get('/Frm_AddServicios', [App\Http\Controllers\ServiciosController::class, 'Frm_AddServicios'])->name('Frm_AddServicios');
    Route::post('/AddServicios', [App\Http\Controllers\ServiciosController::class, 'AddServicios'])->name('AddServicios');
    Route::get('/Frm_EditServicios/{id}', [App\Http\Controllers\ServiciosController::class, 'Frm_EditServicios'])->name('Frm_EditServicios');
    Route::put('/EditServicios/{id}', [App\Http\Controllers\ServiciosController::class, 'EditServicios'])->name('EditServicios');
        
}); //Prevent Back middleware




