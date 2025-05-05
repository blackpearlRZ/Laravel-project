<?php

namespace App\Http\Controllers;
use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function Affichage(){
       $modules = Module::all();
       return view('gestionModules', compact('modules'));
    }
}
