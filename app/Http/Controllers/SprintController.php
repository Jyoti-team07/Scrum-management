<?php

namespace App\Http\Controllers;

use App\Models\sprints;
use Illuminate\Http\Request;

class SprintController extends Controller
{
    public function store(Request $request)
    {
    $validatedData = $request->validate([
        'sprints_name' =>'required|max:100',
        'sprints_start_date' =>'required',
        'sprints_end_date' =>'required',
        'sprints_status' =>'required',
    ]);

    $sprint = new sprints();
    $sprint->sprints_name = $request->sprints_name;
    $sprint->sprints_start_date = $request->sprints_start_date;
    $sprint->sprints_end_date = $request->sprints_end_date;
    $sprint->sprints_status = $request->sprints_status;

    if($sprint->save()){
        return response()->json(['message' => 'Sprint created successfully']);
    }
    else{
        return response()->json(['message' => 'Sprint not created'], 404);
    }

}

public function update(Request $request, string $id){
    $data = sprints::find($id);

    $data->sprints_name = $request->sprints_name;
    $data->sprints_start_date = $request->sprints_start_date;
    $data->sprints_end_date = $request->sprints_end_date;
    $data->sprints_status = $request->sprints_status;

    if($data->save()){
        return response()->json(['message' => 'Sprint updated successfully']);
    }
    else{
        return response()->json(['message' => 'Sprint not updated'], 404);
    }
}

public function destroy($id){
    $data = sprints::find($id);

    if($data === null){
        return response()->json(['message' => 'Sprint not found'], 404);
    }else{
        $data->delete();
        return response()->json(['message' => 'Sprint deleted successfully']);
    }
}


}
