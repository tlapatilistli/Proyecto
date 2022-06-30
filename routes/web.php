<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\BuzonController;
use App\Http\Controllers\RemedioController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\MensajeController;
use App\Http\Controllers\VistaController;

Route::get('/', [ContactanosController::class, 'index'])->name('principal');

Route::post('contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');
Route::get('/cliente', [BuzonController::class, 'index'])->name('buzon');
Route::post('buzon', [BuzonController::class, 'store'])->name('buzon.store');

Route::resource('/remedios', RemedioController::class)->middleware('auth', 'verified');
Route::resource('/productos', ProductoController::class)->middleware('auth', 'verified');
Route::resource('/empleados', EmpleadoController::class)->middleware('auth', 'verified');
Route::resource('/vistas', VistaController::class)->middleware('auth', 'verified');
Route::resource('/mensajes', MensajeController::class);



Route::get('/home', function () {
    return view('home');
});

Route::get('/', function () {
    return view('principal');
});
Route::get('/accesibilidad', function () {
    return view('accesibilidad.html');
});
Route::get('/politica', function () {
    return view('seguridad.privacidad');
});
Route::get('/aviso', function () {
    return view('seguridad.aviso');
});


Route::get('/register',[RegisterController::class,'create'])
    ->middleware('guest')
    ->name('register.index');

Route::post('/register',[RegisterController::class,'store'])
    ->name('register.store');


Route::get('/login',[SessionsController::class,'create'])
    ->middleware('guest')
    ->name('login.index');

Route::post('/login',[SessionsController::class,'store'])
    ->name('login.store');   

Route::get('/logout',[SessionsController::class,'destroy'])
    ->middleware('auth')
    ->name('login.destroy');  

Route::get('/admin',[AdminController::class,'index'])
    ->middleware('auth.admin')
    ->name('admin.index');

Route::get('/user',[UserController::class,'index'])
->middleware('auth.user')
    ->name('user.index');
    
Route::view('principal', 'principal')->name('principal');
Route::get('/admin', function () {
    return view('admin.index');
});
Route::view('cliente/buzon', 'cliente.buzon')->name('buzon');
Route::view('cliente/catalogo', 'cliente.catalogo')->name('catalogo');
Route::view('cliente/historia', 'cliente.historia')->name('historia');
Route::view('cliente/origen', 'cliente.origen')->name('origen');
Route::view('cliente/videos', 'cliente.videos')->name('videos');
Route::view('cliente/about', 'cliente.about')->name('about');
Route::view('cliente/tecnicas', 'cliente.tecnicas')->name('tecnicas');
Route::view('cliente/remedios', 'cliente.remedios')->name('remedios');
Route::view('cliente/comunes', 'cliente.comunes')->name('comunes');
Route::view('cliente/cuidado', 'cliente.cuidado')->name('cuidado');
Route::view('cliente/oftalmologia', 'cliente.oftalmologia')->name('oftalmologia');
Route::view('cliente/cabeza', 'cliente.cabeza')->name('cabeza');
Route::view('cliente/estomago', 'cliente.estomago')->name('estomago');
Route::view('cliente/garganta', 'cliente.garganta')->name('garganta');
Route::view('cliente/mareo', 'cliente.mareo')->name('mareo');
Route::view('cliente/resfriado', 'cliente.resfriado')->name('resfriado');
Route::view('cliente/auxilio', 'cliente.auxilio')->name('auxilio');
Route::view('cliente/traslado', 'cliente.traslado')->name('traslado');
Route::view('cliente/heridas', 'cliente.heridas')->name('heridas');
Route::view('cliente/especiales', 'cliente.especiales')->name('especiales');
Route::view('cliente/hemorragia', 'cliente.hemorragia')->name('hemorragia');
Route::view('seguridad/aviso', 'seguridad.aviso')->name('aviso');
Route::view('seguridad/privacidad', 'seguridad.privacidad')->name('privacidad');
Route::view('auth/recuperacion', 'auth.recuperacion')->name('recuperacion');
Route::view('accesibilidad/html', 'accesibilidad.html')->name('html');
Route::view('accesibilidad/comentario', 'accesibilidad.comentario')->name('comentario');
Route::view('pagos/metodoPago', 'pagos.metodoPago')->name('pago');

Route::resource('store', StoreController::class)->middleware('auth', 'verified');

Auth::routes(['verify'=> true]);
