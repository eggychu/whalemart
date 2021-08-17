<?php

Route::view('/', 'main');
Route::view('/register', 'register');
Route::view('/login', 'login'),
Route::view('/products','products');
Route::view('/products/food', 'food');
Route::view('/products/beverages', 'beverages');
Route::view('/products/appliance', 'appliance');
Route::view('/cart', 'cart');
Route::view('/checkout','checkout');
Route::view('/thanks','thanks');