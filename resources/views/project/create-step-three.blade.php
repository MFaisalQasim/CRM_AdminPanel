@extends('layout.default')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <form id="myFormId" action="{{ route('projects.create.step.three.post') }}" method="post">
                    {{ csrf_field() }}
                    <div class="card">
                        <div class="card-header">Step 3: Review Details</div>

                        <div class="card-body">

                            <table class="table">
                                <tr>
                                    <td>Project Name:</td>
                                    <td><strong>{{ $project->name }}</strong></td>
                                </tr>
                                <tr>
                                    <td>Project Detial:</td>
                                    <td><strong>{{ $project->detial }}</strong></td>
                                </tr>
                                <tr>
                                    <td>Project Amount:</td>
                                    <td><strong>{{ $project->amount }}</strong></td>
                                </tr>
                                <tr>
                                    <td>Project status:</td>
                                    <td><strong>{{ $project->status ? 'Active' : 'DeActive' }}</strong></td>
                                </tr>
                                <tr>
                                    <td>Project Description:</td>
                                    <td><strong>{{ $project->description }}</strong></td>
                                </tr>
                                <tr>
                                    <td>Project Pivority:</td>
                                    <td><strong>{{ $project->pivority }}</strong></td>
                                </tr>
                                <tr>
                                    <td>Project Type:</td>
                                    <td><strong>{{ $project->type }}</strong></td>
                                </tr>
                                <tr>
                                    <td>Project Signed To:</td>
                                    <td><strong>{{ $project->signed_to }}</strong></td>
                                </tr>
                                <tr>
                                    <td>Project of:</td>
                                    <td><strong>{{ $project->project_of }}</strong></td>
                                </tr>
                                <tr>
                                    <td>Project No Of Tasks:</td>
                                    <td><strong>{{ $project->no_of_tasks }}</strong></td>
                                </tr>
                            </table>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-md-6 text-left">
                                    <a href="{{ route('projects.create.step.two') }}"
                                        class="btn btn-danger pull-right">Previous</a>
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
