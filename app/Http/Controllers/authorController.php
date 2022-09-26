<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class authorController extends Controller
{
    /**
     * Récupération des données
     */
    public function show(){
        $authors = Author::all();
    }
}
