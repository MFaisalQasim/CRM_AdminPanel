@extends('layout.app')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Manage Project</div>
  
                <div class="card-body">
                      
                    <a href="{{ route('projects.create.step.one') }}" class="btn btn-primary pull-right">Create Project</a>
  
                    @if (Session::has('message'))
                        <div class="alert alert-info">{{ Session::get('message') }}</div>
                    @endif
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Project Name</th>
                            <th scope="col">Project Description</th>
                            <th scope="col">Stock</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($projects as $project)
                            <tr>
                                <th scope="row">{{$project->id}}</th>
                                <td>{{$project->name}}</td>
                                <td>{{$project->description}}</td>
                                <td>{{$project->stock}}</td>
                                <td>{{$project->amount}}</td>
                                <td>{{$project->status ? 'Active' : 'DeActive'}}</td>
                                <td>{{$task->pivority}}</td>
                                <td>{{$task->type}}</td>
                                <td>{{$task->signed_to}}</td>
                                <td>{{$task->project_of}}</td>
                                <td>{{$task->no_of_tasks}}</td>
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