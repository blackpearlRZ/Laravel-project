<?php

use App\Http\Controllers\InfoController;
use App\Http\Controllers\profilController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use Illuminate\Http\Request;

Route::get('/',[homeController::class,'home']);
Route::get('/routage/{nom}', function(Request $request){
    dd($request->nom);
});

Route::get('/profil',[profilController::class,'profil']);
Route::get('/info',[InfoController::class,'info']);