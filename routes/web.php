<?php

use Illuminate\Support\Facades\Route;

//EJERCICIO 2 - DEFINICION DE LAS RUTAS

//para mostrar la pantalla principal
Route::get('/', function () {
return view ('catalog.index');
});

// Route::get('/', function () {
// echo 'Pantalla principal';
// });

Route::get('login',function() {
    return 'Login usuario';
});

Route::get('logout',function() {
    return 'Logout usuario';
});

Route::get('catalog',function() {
    return 'Listado peliculas';
});

Route::get('catalog/show/{id}',function($id){
    return 'Vista detalle pelicula :'.$id;
    //rellenar con el id
});

Route::get('catalog/create',function(){
    return 'Añadir pelicula :';
    
});


Route::get('catalog/edit/{id}',function($id){
    return 'Modificar pelicula :'.$id;
    
});

