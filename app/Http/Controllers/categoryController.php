<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    #region Récupération
    /**
     * Récupération des données
     */
    public function show(){
        $categories = Category::all();
        return view('categories.show', ['categories'=>$categories]);
    }
    #endregion
}
