<?php

namespace App\Http\Controllers;

use App\Models\task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function index(){
        return view('index');
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'task_title' =>'required|max:100',
            'task_des' =>'required',
            'task_status' =>'required',
            'task_estimated_hour' =>'required',
            'task_actual_hour' =>'required',
            'task_user_stories_id' =>'required',
            'task_users_id' =>'required',
        ]);

        $task = new task();
        $task->task_title = $request->task_title;
        $task->task_des = $request->task_des;
        $task->task_status = $request->task_status;
        $task->task_estimated_hour = $request->task_estimated_hour;
        $task->task_actual_hour = $request->task_actual_hour;
        $task->task_user_stories_id = $request->task_user_stories_id;
        $task->task_users_id = $request->task_users_id;
        if($task->save()){
            return response()->json(['message' => 'Task created successfully']);
        }
        else{
            return response()->json(['message' => 'Task not created'], 404);
        }
    }

    public function update(Request $request, string $id){
        $data = task::find($id);

        $data->task_title = $request->task_title;
        $data->task_des = $request->task_des;
        $data->task_status = $request->task_status;
        $data->task_estimated_hour = $request->task_estimated_hour;
        $data->task_actual_hour = $request->task_actual_hour;
        $data->task_user_stories_id = $request->task_user_stories_id;
        $data->task_users_id = $request->task_users_id;

        if($data->save()){
            return response()->json(['message' => 'Task updated successfully']);
        }
        else{
            return response()->json(['message' => 'Task not updated'], 404);
        }
        
    }

    public function destroy($id){
        $data = task::find($id);

        if($data === null){
            return response()->json(['message' => 'Task not found'], 404);
        }else{
            $data->delete();
            return response()->json(['message' => 'Task deleted successfully']);
        }
    }
}
