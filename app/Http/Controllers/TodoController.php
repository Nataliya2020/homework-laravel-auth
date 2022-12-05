<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     // * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = Todo::all();

        return view('todo', compact('todos'));
    }
}
