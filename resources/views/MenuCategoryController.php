<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Dish;
use Illuminate\Http\Request;

class MenuCategoryController extends Controller
{
    public function addDishForm()
    {
        $categories=Category::all();
        return view('addDishForm', ['categories'=>$categories]);
    }
}
