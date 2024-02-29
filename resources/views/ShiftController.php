<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Shift;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class ShiftController extends Controller
{
//    public function show(User $user){
//        return view('working',['working'=>$user]);
//    }
//
    public function index(){
        $shifts=Shift::all();//вывод всех записей из таблицы
        return view('shift',['work_shifts'=>$shifts]);
    }

    public function store(Request $request)
    {

        $request->validate([
            // 'name' => 'required',
            // 'description' => 'required',
            // 'price' => 'required',
            // 'menu_category_id'=>'required'
        ]);
        Shift::create( $request->all());

        return redirect()->route('admin')->with('success','Блюдо успешно добавлено');
    }

    public function addShift()
    {
        return view('addShiftForm');
    }
}
