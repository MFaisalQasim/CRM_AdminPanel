<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Project;
  
class ProjectController extends Controller
{
    /**
     * Display a listing of the prducts.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();

        return view('projects.index',compact('projects'));
    }

    /**
     * Show the step One Form for creating a new Project.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStepOne(Request $request)
    {
        $project = $request->session()->get('project');
  
        return view('projects.create-step-one',compact('project'));
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
            'name' => 'required|unique:Projects',
            'amount' => 'required|numeric',
            'description' => 'required',
        ]);
  
        if(empty($request->session()->get('project'))){
            $project = new Project();
            $project->fill($validatedData);
            $request->session()->put('project', $project);
        }else{
            $project = $request->session()->get('project');
            $project->fill($validatedData);
            $request->session()->put('project', $project);
        }
  
        return redirect()->route('projects.create.step.two');
    }
  
    /**
     * Show the step One Form for creating a new Project.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStepTwo(Request $request)
    {
        $project = $request->session()->get('project');
  
        return view('projects.create-step-two',compact('project'));
    }
  
    /**
     * Show the step One Form for creating a new Project.
     *
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepTwo(Request $request)
    {
        $validatedData = $request->validate([
            'stock' => 'required',
            'status' => 'required',
        ]);
  
        $project = $request->session()->get('project');
        $project->fill($validatedData);
        $request->session()->put('project', $project);
  
        return redirect()->route('projects.create.step.three');
    }

    /**
     * Show the step One Form for creating a new Project.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStepThree(Request $request)
    {
        $project = $request->session()->get('project');
  
        return view('projects.create-step-three',compact('project'));
    }
  
    /**
     * Show the step One Form for creating a new Project.
     *
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepThree(Request $request)
    {
        $project = $request->session()->get('project');
        $project->save();
  
        $request->session()->forget('project');
  
        return redirect()->route('projects.index');
    }
}