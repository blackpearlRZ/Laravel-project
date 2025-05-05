<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function boucles(Request $request){
        $nom = 'chaimae';
        //$cours = [];
        $color = 'black';
        $cours = ['php','css', 'html', 'javascript'];
        return view('home',compact('nom','cours', 'color'));
    }
    public function home(Request $request){
        $users = [
            ['id'=> '1','nom'=>'chaimae','metier'=>"developpeur"],
            ['id'=> '2','nom'=>'Youssra','metier'=>"Artist"],
            ['id'=> '3','nom'=>'Aya','metier'=>"Model"],
            ['id'=> '4','nom'=>'Ahlam','metier'=>"Model"]
        ];

        return view('home', compact('users'));
    }
}
