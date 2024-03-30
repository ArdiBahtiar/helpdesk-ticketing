<?php

namespace App\Http\Controllers;
use App\Models\Todo;
// use App\Http\Requests;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        return view('todos.index');
    }

    public function indexAdmin() 
    {
        // $todos = Todo::all();               // reads everything from table into memory, ::select('SELECT * FROM table') buat milih
        $todos = Todo::where('dept', '=', 'admin')->get(); // query from table into memory, ::select('SELECT * FROM table WHERE dept = "admin"') buat milih
        $data = ['todos' => $todos];        // variable $dataAdmin buat penyimpanan dari object todos ke variable $todosAdmin
        return view('todos.indexAdmin', $data);  // nested view directories, masuk ke resource/views/todos/index.blade.php buat ngambil $data dari situ
    }

    public function indexManager() 
    {
        // $todos = Todo::all();               // reads everything from table into memory, ::select('SELECT * FROM table') buat milih
        $todos = Todo::where('dept', '=', 'manager')->get(); // query from table into memory, ::select('SELECT * FROM table WHERE dept = "admin"') buat milih
        $data = ['todos' => $todos];        // variable $dataAdmin buat penyimpanan dari object todos ke variable $todosAdmin
        return view('todos.indexManager', $data);  // nested view directories, masuk ke resource/views/todos/index.blade.php buat ngambil $data dari situ
    }

    public function indexUser() 
    {
        // $todos = Todo::all();               // reads everything from table into memory, ::select('SELECT * FROM table') buat milih
        $todos = Todo::where('dept', '=', 'user')->get(); // query from table into memory, ::select('SELECT * FROM table WHERE dept = "admin"') buat milih
        $data = ['todos' => $todos];        // variable $dataAdmin buat penyimpanan dari object todos ke variable $todosAdmin
        return view('todos.indexUser', $data);  // nested view directories, masuk ke resource/views/todos/index.blade.php buat ngambil $data dari situ
    }

    public function create()
    {
        return view('todos.create');
    }

    public function createManager()
    {
        return view('todos.createManager');
    }

    public function createUser()
    {
        return view('todos.createUser');
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
