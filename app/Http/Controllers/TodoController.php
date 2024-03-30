<?php

namespace App\Http\Controllers;
use App\Models\Todo;
// use App\Http\Requests;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index() 
    {
        // $todos = Todo::all();               // reads everything from table into memory, ::select('SELECT * FROM table') buat milih
        $todos = Todo::where('dept', '=', 'admin')->get(); 
        $data = ['todos' => $todos];        // variable $data buat penyimpanan dari object todos ke variable $todos
        return view('todos.index', $data);  // nested view directories, masuk ke resource/views/todos/index.blade.php buat ngambil $data dari situ
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        Todo::create($request->all());       // Todo manggil METHOD ::create($request dimasukkan ke all())
        return redirect('/');                // ngembaliin ke routes/web.php ('/')
    }

    public function edit(Todo $todo)
    {
        return view('todos.edit', compact('todo'));     // nested view directories, masuk ke resource/views/todos/edit.blade.php buat ngambil $data dari situ 
    }                                                   // compact buat bikin array dari variable dan valuenya

    public function update(Request $request, Todo $todo)
    {
        $todo->update($request->all());
        return redirect('/');
    }

    public function delete(Todo $todo)
    {
        $todo->delete();
        return redirect('/');
    }
}
