<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('main');
});


// Маршрут для отображения формы регистрации
Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register');

// Маршрут для обработки запроса на регистрацию
Route::post('/register', [UserController::class, 'register']);


//страница авторизации
Route::get('/login',[UserController::class,'loginForm'])->name('loginForm');
Route::post('/login',[UserController::class,'login'])-> name('login');

// Route::get('/login',[UserController::class,'loginForm'])->name('login');
// Route::post('/login',[UserController::class,'login']);



Route::post('/login', 'UserController@login')->name('login');


Route::get('/user',function (){return view('user');})->name('user');

////Маршрут, который вызывает метод проверки подлинности (аутентификацию)

//Вход в административную панель
Route::middleware(['auth','isAdmin'])->group(function () {
    Route::get('/category',[MenuCategoryController::class, 'index']);
    Route::get('/shift',[ShiftController::class, 'index']);
    Route::get('/register', function (){
        return view('register');})->name('register.create');
    Route::get('/addDish',[ MenuCategoryController::class,'addDishForm'])->name('addDish.create');
    Route::get('/addShift',[ UserController::class,'addShiftForm'])->name('shift.create');

    Route::post('/register',[UserController::class,'store'])->name('register.store');
    Route::post('/addDish',[MenuController::class,'store'])->name('addDish.store');
    Route::post('/createShift',[ShiftController::class,'store'])->name('createShift.store');
    Route::get('/createShift',[ShiftController::class,'addShift'])->name('createShift.create');
    Route::get('/admin',[UserController::class,'admin'])->name('admin');
    Route::get('/user',[UserController::class,'index'])->name('user.index');
    Route::get('/menu',[MenuController::class,'index'])->name('menu.index');
    Route::get('/user/{user}',[UserController::class,'show'])->name('show_id');
    Route::get('/menu/{dish}',[MenuController::class,'show'])->name('show_id');
});

//Вход в личный кабинет
Route::middleware(['auth'])->group(function () {
    Route::get('/profile',[UserController::class,'profile'])->name('profile');
    Route::get('/menu',[MenuController::class,'index'])->name('menu.index');
    Route::get('/menu/{dish}',[MenuController::class,'show'])->name('show_id');

});


Route::get('/logout', 'UserController@logout')->name('logout');
