<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    //
    // public function about()
    // {
    //     $name = 'Ahmed';
    //     $age = '80';
    //     // return view('about' , ['name' => $name , 'age'=>$age]);
    //     // return view('about')->with('age', $age)->with('name', $name);
    //     //يجب توفر امر واحد من ال about
    //     return view('about', compact('name', 'age')); //سهل في تنفيذ الامر وهو compact
    // }
    public function about()
    {
        $name = " ";
        return view('about', compact('name'));
    }
    public function send()
    {
        // $name = $_REQUEST['name'];
        // $age = $_REQUEST['age'];
        $name = request('name');

        return view('about', compact('name'));
    }
    public function tasks()
    {
        // $tasks = ['task 1' , 'task 2' , 'task 3' ];
        // return view('task', compact('tasks'));
        $tasks = [
            'task_1' => 'Task 1',
            2 => 'Task 2',
            'c' => 'Task 3'
        ];
        return view('tasks', compact('tasks'));
    }
    public function index(){
        // $tasks=[
        //     'Task-1'=>'Make our assignment',
        //     'Task-2'=>'Check your phone',
        //     'Task-3'=>'Watch a match'
        // ];
        $tasks = DB::table('tasks')->where('name','like','Task %')->get();
        return view('contact',compact('tasks'));
    }
    public function show($id){
        $task = DB::table('tasks')->find($id);
        return view('task',compact('task'));
    }
}