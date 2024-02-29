<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class UserApiController extends Controller
{
    public function index(){

//        return User::all();
        return UserResource::collection(User::all());
    }
    public function store(Request $request){

       $validator=Validator::make($request->all(),[
           'name' => 'required',
           'surname' => 'required',
           'patronymic' => 'required',
           'login' => 'required|unique:users|min:5',
           'password' => ['required', Password::min(8)->letters()],
           'role_id'=>'required'
       ]);

       if($validator->fails())
           return response()->json(['errors' =>[
               'message' => 'Validation error',
               'errors'=>$validator->errors()]],
               422);

        $user= User::create(['password' => Hash::make($request->password)] + $request->all());

 return response()->json([
     'token' => $user->generateToken()
 ], 201);
}
    public function login(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'login' => 'required',
            'password' => 'required'
        ]);
        // if ($validator->fails())
        //     return response()->json([
        //         'code' => 422,
        //         'message' => 'Validation error',
        //         'errors' => $validator->errors()
        //     ], 422);

            if ($validator->fails())
            return response()->json(['errors' => [
                'code' => 422,
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ]], 422);

        if ($user = User::where(['login' => $request->login])->first()
            and Hash::check($request->password, $user->password)) {
            return response()->json([
                'id'=>$user->id,
                'token' => $user->generateToken(),
                'status' => 'авторизация прошла успешно',
                'code' => '200'
            ], 200);
        }
        return response()->json([
        'id'=>$user->id,
        'code' => 401,
        'message' => 'Ошибка аутентификации',
        'errors' => [
            'data' => ['login or password incorrect']
            ]
        ], 401);
    }
    public function show(User $user){
        return response()->json([
            'user' => $user]);
    }
}
