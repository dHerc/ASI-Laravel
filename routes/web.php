<?php

use App\Http\Controllers\CommentsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('index.html');
});

Route::post('/{page}/comments', [CommentsController::class, 'addComment']);
Route::get('/{page}/comments', [CommentsController::class, 'getComments']);
