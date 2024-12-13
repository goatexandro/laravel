<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Middleware\ComprobarIdAlumno;
use Illuminate\Http\Request;



Route::get('alumnos', [AlumnoController::class, 'getAll']); 

Route::get('alumnos/{id}', [AlumnoController::class, 'getById'])->middleware(ComprobarIdAlumno::class);

Route::post('alumnos', [AlumnoController::class, 'create']); 

Route::delete('alumnos/{id}', [AlumnoController::class, 'delete'])->middleware(ComprobarIdAlumno::class);

Route::patch('alumnos/{id}', [AlumnoController::class, 'update'])->middleware(ComprobarIdAlumno::class);
