@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form id="myFormId" action="{{ route('items.create.step.one.post') }}" method="POST">
                @csrf
  
                <div class="card">
                    <div class="card-header">Step 1: Basic Info</div>
  
                    <div class="card-body">
  
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
  
                            <div class="form-group">
                                <label for="title">Item Name:</label>
                                <input type="text" value="{{ $item->name ?? '' }}" class="form-control" id="taskTitle"  name="name">
                            </div>
                            <div class="form-group">
                                <label for="description">Item Amount:</label>
                                <input type="text"  value="{{{ $item->amount ?? '' }}}" class="form-control" id="itemAmount" name="amount"/>
                            </div>
   
                            <div class="form-group">
                                <label for="description">Item Description:</label>
                                <textarea type="text"  class="form-control" id="taskDescription" name="description">{{{ $item->description ?? '' }}}</textarea>
                            </div>
                          
                    </div>
  
                    <div class="card-footer text-right">
                        <button id="myButtonID" type="submit" class="btn btn-primary">Next</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection