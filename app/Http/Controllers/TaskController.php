<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Task;
  
class TaskController extends Controller
{
    /**
     * Display a listing of the prducts.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();

        return view('tasks.index',compact('tasks'));
    }

    /**
     * Show the step One Form for creating a new Task.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStepOne(Request $request)
    {
        $task = $request->session()->get('task');
  
        return view('tasks.create-step-one',compact('task'));
    }
  
    /**  
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepOne(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:Tasks',
            'amount' => 'required|numeric',
            'description' => 'required',
        ]);
  
        if(empty($request->session()->get('task'))){
            $task = new Task();
            $task->fill($validatedData);
            $request->session()->put('task', $task);
        }else{
            $task = $request->session()->get('task');
            $task->fill($validatedData);
            $request->session()->put('task', $task);
        }

        return redirect()->route('tasks.create.step.two');
    }
  
    /**
     * Show the step One Form for creating a new Task.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStepTwo(Request $request)
    {
        $task = $request->session()->get('task');
  
        return view('tasks.create-step-two',compact('task'));
    }
  
    /**
     * Show the step One Form for creating a new Task.
     *
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepTwo(Request $request)
    {
        $validatedData = $request->validate([
            'stock' => 'required',
            'status' => 'required',
        ]);
  
        $task = $request->session()->get('task');
        $task->fill($validatedData);
        $request->session()->put('task', $task);
  
        return redirect()->route('tasks.create.step.three');
    }

    /**
     * Show the step One Form for creating a new Task.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStepThree(Request $request)
    {
        $task = $request->session()->get('task');
  
        return view('tasks.create-step-three',compact('task'));
    }
  
    /**
     * Show the step One Form for creating a new Task.
     *
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepThree(Request $request)
    {
        $task = $request->session()->get('task');
        $task->save();
  
        $request->session()->forget('task');
  
        return redirect()->route('tasks.index');
    }
}