@extends('layout.default')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form id="myFormId" action="{{ route('tasks.create.step.three.post') }}" method="post" >
                {{ csrf_field() }}
                <div class="card">
                    <div class="card-header">Step 3: Review Details</div>
   
                    <div class="card-body">
  
                            <table class="table">
                                <tr>
                                    <td>Task Name:</td>
                                    <td><strong>{{$task->name}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Task Amount:</td>
                                    <td><strong>{{$task->amount}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Task status:</td>
                                    <td><strong>{{$task->status ? 'Active' : 'DeActive'}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Task Description:</td>
                                    <td><strong>{{$task->description}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Task Stock:</td>
                                    <td><strong>{{$task->stock}}</strong></td>
                                </tr>
                            </table>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6 text-left">
                                <a href="{{ route('tasks.create.step.two') }}" class="btn btn-danger pull-right">Previous</a>
                            </div>
                            <div class="col-md-6 text-right">
                                <button id="myButtonID" type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection