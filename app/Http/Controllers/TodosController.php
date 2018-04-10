<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$todos = Todo::all();
        $todos = Todo::orderBy('created_at','desc')->get();

        return view('todos.index',compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
        ]);

//        create todo
        $todo = new Todo;
        $todo->title = $request->input('title');
        $todo->body = $request->input('body');
        $todo->due = $request->input('due');

        $todo->save();

        return redirect('/')->with('success','todo created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $todos = Todo::find($id);

        return view('todos.show',compact('todos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $todos = Todo::find($id);

        return view('todos.edit',compact('todos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $todos = Todo::find($id);

//        update todo
        $todo = new Todo;
        $todo->title = $request->input('title');
        $todo->body = $request->input('body');
        $todo->due = $request->input('due');

        $todo->save();

        return redirect('/')->with('success','todo updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $todos = Todo::find($id);
        $todos->delete();

        return redirect('/')->with('success','todo deleted');

    }
}
