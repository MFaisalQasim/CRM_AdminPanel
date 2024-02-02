@extends('layout.default')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form id="myFormId" action="{{ route('projects.create.step.two.post') }}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-header">Step 2: Status & Stock</div>
  
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
                                <label for="description">Project Status</label><br/>
                                <label class="radio-inline"><input type="radio" name="status" value="1" {{{ (isset($project->status) && $project->status == '1') ? "checked" : "" }}}> Active</label>
                                <label class="radio-inline"><input type="radio" name="status" value="0" {{{ (isset($project->status) && $project->status == '0') ? "checked" : "" }}}> DeActive</label>
                            </div>
  
                            <div class="form-group">
                                <label for="description">Project Stock</label>
                                <input type="text"  value="{{{ $project->stock ?? '' }}}" class="form-control" id="projectAmount" name="stock"/>
                            </div>
                            <div class="form-group">
                                <label for="description">Project Status</label><br/>
                                <label class="radio-inline"><input type="radio" name="status" value="1" {{{ (isset($project->status) && $project->status == '1') ? "checked" : "" }}}> Active</label>
                                <label class="radio-inline"><input type="radio" name="status" value="0" {{{ (isset($project->status) && $project->status == '0') ? "checked" : "" }}}> DeActive</label>
                            </div>
  
                            <div class="form-group">
                                <label for="description">Project Stock</label>
                                <input type="text"  value="{{{ $project->stock ?? '' }}}" class="form-control" id="projectAmount" name="stock"/>
                            </div>
                            <div class="form-group">
                                <label for="description">Project Status</label><br/>
                                <label class="radio-inline"><input type="radio" name="status" value="1" {{{ (isset($project->status) && $project->status == '1') ? "checked" : "" }}}> Active</label>
                                <label class="radio-inline"><input type="radio" name="status" value="0" {{{ (isset($project->status) && $project->status == '0') ? "checked" : "" }}}> DeActive</label>
                            </div>
  
                            <div class="form-group">
                                <label for="description">Project No Of Tasks</label>
                                <input type="text"  value="{{{ $project->no_of_tasks ?? '' }}}" class="form-control" id="projectAmount" name="stock"/>
                            </div>
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
  
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6 text-left">
                                <a href="{{ route('projects.create.step.one') }}" class="btn btn-danger pull-right">Previous</a>
                            </div>
                            <div class="col-md-6 text-right">
                                <button id="myButtonID" type="submit" class="btn btn-primary">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection