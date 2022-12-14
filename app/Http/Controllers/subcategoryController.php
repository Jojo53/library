<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use Illuminate\Http\Request;

class subcategoryController extends Controller
{
    #region Récupération
    /**
     * Récupération des données
     */
    public function show(){
        $subcategories = SubCategory::all();
        return view('subcategories.show',['subcategories'=>$subcategories]);
    }
    #endregion
}
