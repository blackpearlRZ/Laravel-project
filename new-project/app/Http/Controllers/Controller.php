<?php

namespace App\Http\Controllers;
 class Controller
{
    public function routage($id)
    {
        return view('routage', ['id' => $id]);
    }
}
