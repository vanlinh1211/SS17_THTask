<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TaskController extends Controller
{
    public function showIndex(){
        $tasks = Task::all();
        return view('tasks.show', compact('tasks'));
    }

    public function create(){
        return view('tasks.create');
    }

    public function store(Request $request){
        $tasks = new Task();
        $tasks->nameWork = $request->nameWork;
        $tasks->content = $request->contents;

        if ($request->hasFile('image')){
            $images = $request->image;
            $path = $images->store('images', 'public');
            $tasks->image = $path;
        }
        $tasks->doomsday = $request->doomsday;
        $tasks->save();
        Session::flash('success', 'You succeed');
        return redirect()->route('task.index');
    }

    public function destroy($id){
        $tasks = Task::findOrFail($id);
        $tasks->delete();
        return redirect()->route('task.index');
    }
    public function update($id){
        $tasks = Task::findOrFail($id);
        return view('tasks.update', compact('tasks'));
    }

    public function edit(Request $request, $id){
        $tasks = Task::findOrFail($id);
        $tasks->nameWork = $request->nameWork;
        $tasks->content = $request->contents;

        if ($request->hasFile('image')) {
            $currentImg = $tasks->image;
            if ($currentImg) {
                Storage::delete('/public/' . $currentImg);
            }
            $images = $request->image;
            $path = $images->store('images', 'public');
            $tasks->image = $path;
        }
        $tasks->doomsday = $request->doomsday;
        $tasks->save();
        Session::flash('success', 'You succeed');
        return redirect()->route('task.index');
    }
}
