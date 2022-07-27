<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $products = config("comics");
    return view('home',[
        "products" => $products
    ]);
})->name("products");


Route::get('characters' , function(){
    return view('characters');
})->name('characters');


Route::get('comics', function(){
    return view('comics');
})->name('comics');

Route::get('/products/{id}', function ($id){
    $products = config("comics");
    $productsFind = array_filter($products , function($product) use ($id){
        return $product['id'] === (int) $id;
    });

    $chiave = array_keys($productsFind);

    return view('prodotti.products' , [
        "prodotto" => $productsFind[$chiave[0]],
    ]);

})->name('prodotti');
