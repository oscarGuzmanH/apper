<?php

use App\Http\Controllers\messageController;
use App\Http\Controllers\portfolioController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

/**
 * aprendible.com Route::get('/', function);
 * aprendible.com/contacto Route::get('contacto', function);
 * 
 * Route::get()
 * Route::post()
 * Route::put()
 * Route::patch()
 * Route::delete()
 * 
 * Route::get('/', function() {
 *      $nombre = "Alberto";
 *      return view('index', ['nombre' => $nombre]);
 *  })->name('inicio'); 
*/

App::setLocale('es');

Route::view('/', 'index')->name('Inicio'); // Politicas de privacidad, terminos y condiciones
Route::view('about', 'about')->name('AcercaDe');
Route::get('portfolio', [portfolioController::class, 'index'])->name('Portafolio');
Route::view('contact', 'contact')->name('Contacto');
Route::post('contact', [messageController::class, 'store'])->name('Mensajeria');

Route::get('saludo/{nombre?}', function($nombre = 'Desconocido') {    return "Saludos $nombre";})->name('saludar');


/*  Route::get('contactame', function() {
        return "Seccion De Contactos";
    })->name('conttacts');
    Route::get('/', function() {
        echo '<a href="'.route('conttacts').'">Contacto 1 </a><br/>';
        echo '<a href="'.route('conttacts').'">Contacto 2 </a><br/>';
        echo '<a href="'.route('conttacts').'">Contacto 3 </a><br/>';
        echo '<a href="'.route('conttacts').'">Contacto 4 </a><br/>';
        echo '<a href="'.route('conttacts').'">Contacto 5 </a><br/>';
        echo '<a href="'.route('conttacts').'">Contacto 6 </a><br/>';
    });
 */
