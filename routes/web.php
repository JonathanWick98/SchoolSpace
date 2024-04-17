<?php

use App\Http\Controllers\AlumnosController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});


Route::resource('alumnos', '\App\Http\Controllers\AlumnosController')
    ->only(['index', 'create', 'store', 'show', 'edit', 'update']);

Route::get('/registro', function () {
    return view('alumnos.create'); 
});

Route::get('/start', function () {
    return view('alumnos.start'); 
});

Route::get('/start', function () {
    return view('alumnos.start');
})->name('alumnoinfo.start');

Route::get('/Expediente', function () {
    return view('alumnoinfo.expe'); 
})->name('alumnoinfo.expe');

Route::get('/Notas', function () {
    return view('alumnoinfo.nota'); 
})->name('alumnoinfo.nota');

Route::get('/Materias', function () {
    return view('alumnoinfo.materia'); 
})->name('alumnoinfo.materia');

Route::get('/Ayuda', function () {
    return view('alumnoinfo.ayuda'); 
})->name('alumnoinfo.ayuda');

Route::get('/Contacto', function () {
    return view('alumnoinfo.contacto'); 
})->name('alumnoinfo.contacto');

Route::get('/Acerca', function () {
    return view('alumnoinfo.acerca'); 
})->name('alumnoinfo.acerca');

Route::get('/matematicas', function () {
    return view('alummateria.matematicas'); 
})->name('alummateria.matematicas'); // Aquí he corregido el nombre de la ruta

Route::get('/lenguaje', function () {
    return view('alummateria.lenguaje'); 
})->name('alummateria.lenguaje'); // Aquí he corregido el nombre de la ruta

Route::get('/ciencias', function () {
    return view('alummateria.ciencias'); 
})->name('alummateria.ciencias'); // Aquí he corregido el nombre de la ruta

Route::get('/histora', function () {
    return view('alummateria.historia'); 
})->name('alummateria.historia'); // Aquí he corregido el nombre de la ruta

