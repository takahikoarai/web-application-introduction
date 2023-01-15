<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use App\Http\Requests\TodoRequest;

class IndexController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('index', ['todos' => $todos]);
    }

    public function create(TodoRequest $request)
    {
        $todo = $request->all();
        Todo::create($todo);
        return redirect('/');
    }

    public function update(TodoRequest $request)
    {
        $todo = $request->all();
        unset($todo['_token']);
        Todo::where('id', $request->id)->update($todo);
        return redirect('(/');
    }

    public function delete(Request $request)
    {   
        Todo::find($request->id)->delete();
        return redirect('/');
    }
}
