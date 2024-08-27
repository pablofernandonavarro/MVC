<?php 

use Libreria\Route;
use app\controllers\HomeController;

Route::get('/',[HomeController::class,'index']);

Route::get('/usuario',function(){

    return "Hola desde pagina usuario  ";
});

Route::get('/about',function(){

    return "Hola desde pagina about  ";
});


Route::get('/usuario/:slug',function($slug){

    return 'el curso es   =' . $slug;
});
 Route::pispatch();