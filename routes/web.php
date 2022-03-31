<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get( '/', function () {
    return view( 'auth.login' );
} );

// Route::get( '/dashboard', function () {
//     return view( 'dashboard' );
// } )->middleware( ['auth', 'verified'] )->name( 'dashboard' );

Route::middleware( ['auth', 'verified'] )->group( function () {
    Route::resource( 'dashboard', UserController::class )
        ->parameters( [
            'dashboard' => 'user', // nombre del parametro que se usa en las rutas ej. /vacantes/{vacante} (vacante es el parametro)
        ] );
} );

require __DIR__ . '/auth.php';
