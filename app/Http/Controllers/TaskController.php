<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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

    /////////////////////////////////////////////////////////////////////////////////////////////
    // public function about()
    // {
    //     $name = " ";
    //     return view('about', compact('name'));
    // }
    // public function send()
    // {
    //     // $name = $_REQUEST['name'];
    //     // $age = $_REQUEST['age'];
    //     $name = request('name');

    //     return view('about', compact('name'));
    // }
    // public function tasks()
    // {
    //     // $tasks = ['task 1' , 'task 2' , 'task 3' ];
    //     // return view('task', compact('tasks'));
    //     $tasks = [
    //         'task_1' => 'Task 1',
    //         2 => 'Task 2',
    //         'c' => 'Task 3'
    //     ];
    //     return view('tasks', compact('tasks'));
    // }
    // public function index()
    // {
    //     // $tasks=[
    //     //     'Task-1'=>'Make our assignment',
    //     //     'Task-2'=>'Check your phone',
    //     //     'Task-3'=>'Watch a match'
    //     // ];
    //     $tasks = DB::table('tasks')->where('name', 'like', 'Task %')->get();
    //     return view('contact', compact('tasks'));
    // }
    // public function show($id)
    // {
    //     $task = DB::table('tasks')->find($id);
    //     return view('task', compact('task'));
    // }

        public function index(){
            // $tasks = DB::table('tasks')->get();
            $tasks = Task::all();
            return view('index', compact('tasks'));
        }

        public function store(Request $request){
            $task = new Task();
            $task->name = $request->task_name;
            $task->save();

            return redirect()->back();

            // DB::table('tasks')->insert([
            //     'name'=> $request->task_name,
            //     'created_at'=> now(),
            //     'updated_at'=> now()
            // ]);
            // return redirect()->back();
        }

        public function delete($id){
            $task = Task::find($id);
            $task->delete();
            return redirect()->back();
        // DB::table('tasks')->where('id','=',$id)->delete();
        // return redirect()->back();
        }

        public function update(Request $request,$id){
            $task = Task::find($id);
            $task->name =$request->task_name;
            $task->save();

            return redirect('/');
        }
        // public function update($id){
        //     // DB::table('tasks')->where('id','=',$id)->update();
        //     $tasks = DB::table('tasks')->where('id', 1)->update(['tasks' => 1]);
        //     return redirect()->back();
        //     }

        // public function update(Request $request){//تحتاج تكملة
        //     DB::table('tasks')->find([
        //         // 'name'=> $request->task_name,
        //         'id'=> $request->task_id,
        //         // 'created_at'=> now(),
        //         // 'updated_at'=> now()
        //     ]);
        //     return redirect()->back();
        // }

        public function edit ($id){
            $task = Task::find($id);
            return view('edit',compact('task'));

        }
}
