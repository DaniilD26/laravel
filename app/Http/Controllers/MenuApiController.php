<?php

namespace App\Http\Controllers;

use App\Http\Resources\MenuResource;
use Illuminate\Http\Request;
use App\Models\Menu;

class MenuApiController extends Controller
{
    public function index(){

        //        return User::all();
                return MenuResource::collection(Menu::all());
                // return Menu::all();
            }
            public function show(Menu $menu){
                return response()->json([
                    'menu' => $menu]);
            }
}
