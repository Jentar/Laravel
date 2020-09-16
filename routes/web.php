<?php

use App/Book;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


Route::get('/', function () {
    $books = Book::where('language', 'Swahili')->get();
    return view('welcome', ['books' -> $books']);
});
