<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        if(count($data =Todo::all()) > 0 ){
            return json_encode(['status' => true, 'data' => $data]);
        } else {
            return json_encode(['status' => false, 'message' => 'Please add tasks']);
        }
    }

    
    public function store(Request $request)
    {
        if (Todo::create(['name' =>$request->name])) {
            return json_encode(['status' => true, 'message' => 'Task saved !!']);
        } else {
            return json_encode(['status' => false, 'message' => 'Task Failed to Add !!']);
        }
    }

    public function statusChange(Request $request) {
        if (Todo::where('id',$request->id)->update(['status' => 1])) {
            return json_encode(['status' => true, 'message' => 'Task Status Changed!!']);
        } else {
            return json_encode(['status' => false, 'message' => 'Task Status Change Failed !!']);
        }
    }
}
