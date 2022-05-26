<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\Raw;

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
    // return view('welcome');

    $products = Product::all();

    // foreach($products as $product){
    //     echo 'Product: '.$product['name'].'<br>';
    //     echo '<b>Raw:</b><br>';
    //     foreach($product->raws as $raw){
    //         echo $raw['name'].'<br>';
    //     }
    //     echo '_______________________<br>';
    // }


    $raws = Raw::all();
    foreach($raws as $raw){
        echo 'Raw: '.$raw['name'].'<br>';
        echo '<b>Products:</b><br>';
        foreach($raw->products as $product){
            echo $product->pivot->created_at.'<br>';
        }
        echo '_______________________<br>';
    }



});
