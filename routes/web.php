<?php

use App\Book;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


Route::get('/', [BookController::class,'index']);
