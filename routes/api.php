<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route::get('/test', function () {
//     return response()->json(['message' => 'Welcome to the API',]);
// });
// Route::get('/test', function () {
//     return 'welcome to the API';
// });
// Route::post('/', function (Request $request) {
//     return response()->json(
//         [
//             'name' => $request->name,
//             'email' => $request->email,
//         ]
//     );
// });
    Route::prefix('product')->group(function () {
        
    Route::get('/', [ProductController::class, 'getAllProducts']);
    Route::post('/create', [ProductController::class, 'createProduct']);

    });

