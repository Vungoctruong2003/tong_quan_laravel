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
    return view('show_discount_amount');
});

Route::post('/result', function (\Illuminate\Http\Request $request) {
    $productDescription = $request->productDescription;
    $price = $request->Price;
    $discountPercent = $request->discountPercent;
    $discountAmount = $price *$discountPercent * 0.1;
    $discountPrice = $price - $discountAmount;
    return view('result', compact(['discountPrice', 'discountAmount', 'productDescription', 'price', 'discountPercent']));
});
