<?php

Route::get('/', function () {
    return view('auth.login');
});

Route::resource('dashboard','HomeController');
Route::resource('admin','AdminController');
Route::resource('administrativos','AdministrativosController');
Route::resource('profesores','ProfesoresController');
Route::resource('alumnos','AlumnosController');
Route::resource('calificaciones','CalificacionController');
Route::resource('matriculas','MatriculaController');
Route::resource('materias','MateriaController');
Route::resource('grados','GradoController');
Route::resource('periodos','PeriodoController');

Route::post('actualizacion','HomeController@actualizacion');
Route::get('cambiar-clave','HomeController@cambiarclave');
Route::post('update-clave','HomeController@updateclave');

 







Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
