<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
// // Route::get('/alo/{id}', function (string $id) {
// //     return "salom $id";
// // })->name("salom");
// Route::get('/alu', function () {
//     return  redirect()->route('salom');
// });
// Route::prefix("staff")->group(function()
// {
//     Route::get('/aluu', function () {
//         return  "salom";
//     });
// });


Route::get('/city/{name}', function (string $name) {
    return "welcome to $name";
})->name("city.show");

Route::prefix("admin")->group(function()
{
    Route::get('users/{id}', function ( string $id) {
        return  " ID: $id";
    })->name("admin.users.show");
});
Route::prefix("profile")->group(function()
{
    Route::get('view', function () {
        return  " view";
    })->name(" profile.view");
    Route::get('edit', function () {
        return  " edit";
    })->name("profile.edit");
    Route::get('settings', function () {
        return  "settings";
    })->name("/profile.settings");
});
Route::prefix("products")->group(function()
{
    Route::get('products/{id}', function ( string $id) {
        return  "Products ID: $id";
    });
    Route::get('products/{id}/edit', function (string $id) {
        return  "Products ID: $id edit";
    })->name("products.edit");

});
Route::get('/new-url', function () {
    return "new";
})->name("new-url");
Route::get('/old-url', function () {
    return  redirect()->route('new-url');
});