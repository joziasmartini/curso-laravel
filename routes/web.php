<?php

use Illuminate\Support\Facades\Route;


Route::view('/view', 'welcome');

Route::redirect('/redirect1', '/redirect2');

// Route::get('/redirect1', function () {
//     return redirect('/redirect2');
// });

Route::get('/redirect2', function () {
    return "Redirect 2!";
});

Route::get('/produtos/{idProduct?}', function ($idProduct = '') {
    return "Produtos: {$idProduct}";
});

Route::get('/categorias/{flag}/posts', function ($flag) {
    return "Posts da categoria: {$flag}";
});

Route::get('/categoria/{flag}', function ($flag) {
    return "Produtos da categoria: {$flag}";
});

Route::match(['put', 'post'],'/match', function () {
    return 'Match';
});

Route::any('/any', function () {
    return 'Any';
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contato', function () {
    return view('contact');
});

Route::get('/ola', function () {
    return 'Olá!';
});
