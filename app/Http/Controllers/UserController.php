<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;

class 
UserController extends Controller
{

    public function index(){
        
        return view('index');
    }
    public function store(Request $request){

        $validatedData = $request->validate([
            'users_name' =>'required|max:100',
            'users_role' =>'required',
        ]);

        $user = new users();
        $user->users_name = $request->users_name;
        $user->users_role = $request->users_role;

        if($user->save()){
            return response()->json(['message' => 'User created successfully']);
        }
        else{
            return response()->json(['message' => 'User not created'], 404);
        }
    }

    public function update(Request $request, string $id){
        $data = users::find($id);

        $data->users_name = $request->users_name;
        $data->users_role = $request->users_role;
        
        if($data->save()){
            return response()->json(['message' => 'User updated successfully']);
        }
        else{
            return response()->json(['message' => 'User not updated'], 404);
        }
        
    }

    public function destroy($id){
        $data = users::find($id);

        if($data === null){
            return response()->json(['message' => 'User not found'], 404);
        }else{
            $data->delete();
            return response()->json(['message' => 'User deleted successfully']);
        }
    }
}
