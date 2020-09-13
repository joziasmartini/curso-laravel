<?php

use Illuminate\Support\Facades\Route;

Route::get('/products', 'ProductController@index')->name('products.index');

Route::get('/login', function () {
    return 'Login';
})->name('login');

/*
Route::middleware([])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::namespace('Admin')->group(function () {
            Route::name('admin.')->group(function () {
                Route::get('/dashboard', 'TesteController@dashboard')->name('dashboard');
                Route::get('/financeiro', 'TesteController@financeiro')->name('financeiro');
                Route::get('/produtos', 'TesteController@produtos')->name('products');
                Route::get('/', function () {
                    return redirect()->route('admin.dashboard');
                })->name('home');
            }); 
        });
    });
});
*/

/*
Route::group([
    'middleware' => [],
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'name' => 'admin.'
], function () {                
    Route::get('/dashboard', 'TesteController@dashboard')->name('dashboard');
    Route::get('/financeiro', 'TesteController@financeiro')->name('financeiro');
    Route::get('/produtos', 'TesteController@produtos')->name('products');
    Route::get('/', function () {
        return redirect()->route('admin.dashboard');
    })->name('home');
});
*/

Route::get('/redirect3', function () {
    return redirect()->route('url.name');
});

Route::get('/redirect4', function () {
    return "Redirect 4!";
})->name('url.name');

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
