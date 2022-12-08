<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;

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

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/getRoles', function() {
    return response()->json(\Spatie\Permission\Models\Role::all());
});

Route::post('/createRole', function(Request $request) {
    Role::create(['name' => $request->name]);
    return response()->json('Permissão criada com sucesso');
});
