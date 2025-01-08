<?php

namespace App\Http\Controllers;

use App\Models\user_stories;
use Illuminate\Http\Request;

class UserStoriesController extends Controller
{
    public function store(Request $request){

        $validatedData = $request->validate([
            'user_stories_title' =>'required|max:200',
            'user_stories_des' =>'required',
            'sprint_id' =>'required',
        ]);

        $user_stories = new user_stories();
        $user_stories->user_stories_title = $request->user_stories_title;
        $user_stories->user_stories_des = $request->user_stories_des;
        $user_stories->sprint_id = $request->sprint_id;

        if($user_stories->save()){
            return response()->json(['message' => 'User Stories created successfully']);
        }
        else{
            return response()->json(['message' => 'User Stories not created'], 404);
        }
    }

    public function update(Request $request, string $id){
        $data = user_stories::find($id);

        $data->user_stories_title = $request->user_stories_title;
        $data->user_stories_des = $request->user_stories_des;
        $data->sprint_id = $request->sprint_id;
        
        if($data->save()){
            return response()->json(['message' => 'User Stories updated successfully']);
        }
        else{
            return response()->json(['message' => 'User Stories not updated'], 404);
        }
    }

    public function destroy($id){
        $data = user_stories::find($id);

        if($data === null){
            return response()->json(['message' => 'User Stories not found'], 404);
        }else{
            $data->delete();
            return response()->json(['message' => 'User Stories deleted successfully']);
        }
    }
}
