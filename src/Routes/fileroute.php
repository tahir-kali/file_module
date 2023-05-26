
<?php

use App\Packages\File\src\Http\Controllers\FileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FileController::class,'index']);
