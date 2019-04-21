<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TodosController extends Controller
{
    public function index()
    {
        return response(Todo::all()->jsonSerialize(), Response::HTTP_OK);
    }

    public function store(Request $request)
    {
        $todo = new Todo();
        $todo->title = $request->get('title');
        $todo->completed = false;
        $todo->save();

        return response($todo->jsonSerialize(), Response::HTTP_CREATED);
    }

    public function update(Request $request, $id)
    {
        $todo = Todo::findOrFail($id);
        $todo->title = $request->get('title');
        $todo->completed = $request->get('completed') == '1' ? true : false;
        $todo->save();

        return response(null, Response::HTTP_OK);
    }

    public function destroy($id)
    {
        Todo::destroy($id);

        return response(null, Response::HTTP_OK);
    }
}
