<?php

use App\Http\Controllers\PokemonCardController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/** @var Illuminate\Routing\Router $router */
$router = app('Illuminate\Routing\Router');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

$router->group(['namespace' => 'Pokemon', 'prefix' => 'pokemon'], function () use ($router) {
    $router->get('', [PokemonCardController::class, 'index'])->name('pokemon-index');
    $router->post('', [PokemonCardController::class, 'store'])->name('pokemon-store');
});
