@extends('layout.app')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Manage Task</div>
  
                <div class="card-body">
                      
                    <a href="{{ route('tasks.create.step.one') }}" class="btn btn-primary pull-right">Create Task</a>
  
                    @if (Session::has('message'))
                        <div class="alert alert-info">{{ Session::get('message') }}</div>
                    @endif
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">task Name</th>
                            <th scope="col">task Description</th>
                            <th scope="col">Stock</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tasks as $task)
                            <tr>
                                <th scope="row">{{$task->id}}</th>
                                <td>{{$task->name}}</td>
                                <td>{{$task->description}}</td>
                                <td>{{$task->stock}}</td>
                                <td>{{$task->amount}}</td>
                                <td>{{$task->status ? 'Active' : 'DeActive'}}</td>
                                <td>{{$task->pivority}}</td>
                                <td>{{$task->type}}</td>
                                <td>{{$task->signed_to}}</td>
                                <td>{{$task->belong_to}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection