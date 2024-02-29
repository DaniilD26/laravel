<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{

    public function index(){
        $categories=Category::all();//вывод всех записей из таблицы
        return view('category',['categories'=>$categories]);
    }


    public function store(Request $request){
        $request->validate([
            'name' => 'required'
            ]);
        Category::create($request->all());
        return redirect()->route('category.store')->with('success','Категория
        успешно добавлена');
        }

        public function insert(){
            $categories=Category::all();//вывод всех записей из таблицы
            return view('shop.category_create',['categories'=>$categories]);
        }
}
