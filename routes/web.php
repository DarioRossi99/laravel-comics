<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $headerArray = config('headerArray');
    $footerArray = config('footerArray');
    $comicsArray = config('comics');
    $itemsList = config('itemsList');

    return view('index', [
        "headerArray" => $headerArray,
        "footerArray" => $footerArray,
        "comicsArray" => $comicsArray,
        "itemsList" => $itemsList,
    ]);
})->name("home");


Route::get('/News', function () {

    $headerArray = config('headerArray');
    $footerArray = config('footerArray');
    $comicsArray = config('comics');
    $itemsList = config('itemsList');

    return view('news', [
        "headerArray" => $headerArray,
        "footerArray" => $footerArray,
        "comicsArray" => $comicsArray,
        "itemsList" => $itemsList,
    ]);

})->name("news");