<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class categoriesController extends Controller
{
    function afficherCategories(){
        $categories = Category::all(); 
        return view("categories", ['categories'=>$categories]); 
    } 
}

?>