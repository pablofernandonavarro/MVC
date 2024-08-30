<?php 

use Libreria\Route;
use app\controllers\HomeController;
use App\Controllers\UserController;

Route::get('/',[HomeController::class,'index']);


// ***************************************   Rutas Usuarios  ************************************************

Route::get('/usuarios',[UserController::class,'index']) ;
Route::get('/usuarios/crear',[UserController::class,'create']) ;
Route::post('/usuarios',[UserController::class,'store']);
Route::get('/usuarios/:id',[UserController::class,'show']);
Route::get('/usuarios/:id/editar',[UserController::class,'edit']);
Route::post('/usuarios/:id',[UserController::class,'update']);
Route::post('/usuarios/:id/borrar',[UserController::class,'destroy']);

// ***************************************   / Rutas Usuarios ************************************************




Route::pispatch();