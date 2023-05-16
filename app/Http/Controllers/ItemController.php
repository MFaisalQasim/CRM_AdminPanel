<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Item;
  
class ItemController extends Controller
{
    /**
     * Display a listing of the prducts.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();
  
        return view('items.index',compact('items'));
    }
  
    /**
     * Show the step One Form for creating a new Item.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStepOne(Request $request)
    {
        $item = $request->session()->get('item');
  
        return view('items.create-step-one',compact('item'));
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
            'name' => 'required|unique:Items',
            'amount' => 'required|numeric',
            'description' => 'required',
        ]);
  
        if(empty($request->session()->get('item'))){
            $item = new Item();
            $item->fill($validatedData);
            $request->session()->put('item', $item);
        }else{
            $item = $request->session()->get('item');
            $item->fill($validatedData);
            $request->session()->put('item', $item);
        }
  
        return redirect()->route('items.create.step.two');
    }
  
    /**
     * Show the step One Form for creating a new Item.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStepTwo(Request $request)
    {
        $item = $request->session()->get('item');
  
        return view('items.create-step-two',compact('item'));
    }
  
    /**
     * Show the step One Form for creating a new Item.
     *
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepTwo(Request $request)
    {
        $validatedData = $request->validate([
            'stock' => 'required',
            'status' => 'required',
        ]);
  
        $item = $request->session()->get('item');
        $item->fill($validatedData);
        $request->session()->put('item', $item);
  
        return redirect()->route('items.create.step.three');
    }
  
    /**
     * Show the step One Form for creating a new Item.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStepThree(Request $request)
    {
        $item = $request->session()->get('item');
  
        return view('items.create-step-three',compact('item'));
    }
  
    /**
     * Show the step One Form for creating a new Item.
     *
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepThree(Request $request)
    {
        $item = $request->session()->get('item');
        $item->save();
  
        $request->session()->forget('item');
  
        return redirect()->route('items.index');
    }
}