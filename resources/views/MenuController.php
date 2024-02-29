<?php

namespace App\Http\Controllers;

use App\Http\Resources\MenuResource;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class MenuController extends Controller
{
    public function index(){
        $menu=Menu::all();//вывод всех записей из таблицы
        return view('menu',['menu'=>$menu]);
    }

    public function show(Menu $dish){
        return view('dish',['dish'=>$dish]);
    }
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'menu_category_id'=>'required'
        ]);
        Menu::create( $request->all());

        return redirect()->route('admin')->with('success','Блюдо успешно добавлено');
    }
}
