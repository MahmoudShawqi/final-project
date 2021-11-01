<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function about()
    {
        $name = 'Ahmed';
        $age = '80';
        // return view('about' , ['name' => $name , 'age'=>$age]);
        // return view('about')->with('age', $age)->with('name', $name);
        //يجب توفر امر واحد من ال about
        return view('about', compact('name', 'age')); //سهل في تنفيذ الامر وهو compact
    }
    public function contact()
    {
            $name = "Mohammed";
            return view('contact', compact('name'));

    }
    public function send()
    {
        $name = $_REQUEST['name'];
        $age = $_REQUEST['age'];
        return view('contact', compact('name', 'age'));
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
}
