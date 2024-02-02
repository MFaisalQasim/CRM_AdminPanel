@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @can('user-list')
                            <a class="btn btn-success" href="{{ url('user') }}"> List User</a>
                            <br>
                            <br>
                        @endcan
                        @can('role-list')
                            <a class="btn btn-success" href="{{ url('roles') }}"> List roles</a>
                            <br>
                            <br>
                        @endcan
                        @can('product-list')
                            <a class="btn btn-success" href="{{ url('products') }}"> List Product</a>
                            <br>
                            <br>
                        @endcan


                        @can('role-list')
                            <a class="btn btn-success" href="{{ url('roles') }}"> roles list</a>
                            <br>
                            <br>
                        @endcan

                        @can('role-create')
                            <a class="btn btn-success" href="{{ url('roles') }}"> roles create</a>
                            <br>
                            <br>
                        @endcan

                        @can('role-edit')
                            <a class="btn btn-success" href="{{ url('roles') }}"> roles edit</a>
                            <br>
                            <br>
                        @endcan

                        @can('role-delete')
                            <a class="btn btn-success" href="{{ url('roles') }}"> roles delete</a>
                            <br>
                            <br>
                        @endcan


                        @can('item-list')
                            <a class="btn btn-success" href="{{ url('items') }}"> items list</a>
                            <br>
                            <br>
                        @endcan

                        @can('item-create')
                            <a class="btn btn-success" href="{{ url('items') }}"> items create</a>
                            <br>
                            <br>
                        @endcan

                        @can('item-edit')
                            <a class="btn btn-success" href="{{ url('items') }}"> items edit</a>
                            <br>
                            <br>
                        @endcan

                        @can('item-delete')
                            <a class="btn btn-success" href="{{ url('items') }}"> items delete</a>
                            <br>
                            <br>
                        @endcan


                        @can('attendance-list')
                            <a class="btn btn-success" href="{{ url('attendances') }}"> attendances list</a>
                            <br>
                            <br>
                        @endcan

                        @can('attendance-view')
                            <a class="btn btn-success" href="{{ url('attendances') }}"> attendances view</a>
                            <br>
                            <br>
                        @endcan

                        @can('attendance-create')
                            <a class="btn btn-success" href="{{ url('attendances') }}"> attendances create</a>
                            <br>
                            <br>
                        @endcan

                        @can('attendance-edit')
                            <a class="btn btn-success" href="{{ url('attendances') }}"> attendances edit</a>
                            <br>
                            <br>
                        @endcan

                        @can('attendance-delete')
                            <a class="btn btn-success" href="{{ url('attendances') }}"> attendances delete</a>
                            <br>
                            <br>
                        @endcan


                        @can('task-list')
                            <a class="btn btn-success" href="{{ url('tasks') }}"> tasks list</a>
                            <br>
                            <br>
                        @endcan

                        @can('task-view')
                            <a class="btn btn-success" href="{{ url('tasks') }}"> tasks view</a>
                            <br>
                            <br>
                        @endcan

                        @can('task-create')
                            <a class="btn btn-success" href="{{ url('tasks') }}"> tasks create</a>
                            <br>
                            <br>
                        @endcan

                        @can('task-edit')
                            <a class="btn btn-success" href="{{ url('tasks') }}"> tasks edit</a>
                            <br>
                            <br>
                        @endcan

                        @can('task-delete')
                            <a class="btn btn-success" href="{{ url('tasks') }}"> tasks delete</a>
                            <br>
                            <br>
                        @endcan


                        @can('project-list')
                            <a class="btn btn-success" href="{{ url('projects') }}"> projects list</a>
                            <br>
                            <br>
                        @endcan

                        @can('project-view')
                            <a class="btn btn-success" href="{{ url('projects') }}"> projects view</a>
                            <br>
                            <br>
                        @endcan

                        @can('project-create')
                            <a class="btn btn-success" href="{{ url('projects') }}"> projects create</a>
                            <br>
                            <br>
                        @endcan

                        @can('project-edit')
                            <a class="btn btn-success" href="{{ url('projects') }}"> projects edit</a>
                            <br>
                            <br>
                        @endcan

                        @can('project-delete')
                            <a class="btn btn-success" href="{{ url('projects') }}"> projects delete</a>
                            <br>
                            <br>
                        @endcan


                        @can('notification-list')
                            <a class="btn btn-success" href="{{ url('notifications') }}"> notifications list</a>
                            <br>
                            <br>
                        @endcan

                        @can('notification-create')
                            <a class="btn btn-success" href="{{ url('notifications') }}"> notifications create</a>
                            <br>
                            <br>
                        @endcan

                        @can('notification-edit')
                            <a class="btn btn-success" href="{{ url('notifications') }}"> notifications edit</a>
                            <br>
                            <br>
                        @endcan

                        @can('notification-delete')
                            <a class="btn btn-success" href="{{ url('notifications') }}"> notifications delete</a>
                            <br>
                            <br>
                        @endcan


                        @can('hiring-list')
                            <a class="btn btn-success" href="{{ url('hirings') }}"> hirings list</a>
                            <br>
                            <br>
                        @endcan

                        @can('hiring-view')
                            <a class="btn btn-success" href="{{ url('hirings') }}"> hirings view</a>
                            <br>
                            <br>
                        @endcan

                        @can('hiring-create')
                            <a class="btn btn-success" href="{{ url('hirings') }}"> hirings create</a>
                            <br>
                            <br>
                        @endcan

                        @can('hiring-edit')
                            <a class="btn btn-success" href="{{ url('hirings') }}"> hirings edit</a>
                            <br>
                            <br>
                        @endcan

                        @can('hiring-delete')
                            <a class="btn btn-success" href="{{ url('hirings') }}"> hirings delete</a>
                            <br>
                            <br>
                        @endcan


                        @can('employee-list')
                            <a class="btn btn-success" href="{{ url('employees') }}"> employees list</a>
                            <br>
                            <br>
                        @endcan

                        @can('employee-create')
                            <a class="btn btn-success" href="{{ url('employees') }}"> employees create</a>
                            <br>
                            <br>
                        @endcan

                        @can('employee-view')
                            <a class="btn btn-success" href="{{ url('employees') }}"> employees view</a>
                            <br>
                            <br>
                        @endcan

                        @can('employee-edit')
                            <a class="btn btn-success" href="{{ url('employees') }}"> employees edit</a>
                            <br>
                            <br>
                        @endcan

                        @can('employee-delete')
                            <a class="btn btn-success" href="{{ url('employees') }}"> employees delete</a>
                            <br>
                            <br>
                        @endcan


                        @can('report-list')
                            <a class="btn btn-success" href="{{ url('reports') }}"> reports list</a>
                            <br>
                            <br>
                        @endcan

                        @can('report-create')
                            <a class="btn btn-success" href="{{ url('reports') }}"> reports create</a>
                            <br>
                            <br>
                        @endcan

                        @can('report-view')
                            <a class="btn btn-success" href="{{ url('reports') }}"> reports view</a>
                            <br>
                            <br>
                        @endcan

                        @can('report-edit')
                            <a class="btn btn-success" href="{{ url('reports') }}"> reports edit</a>
                            <br>
                            <br>
                        @endcan

                        @can('report-delete')
                            <a class="btn btn-success" href="{{ url('reports') }}"> reports delete</a>
                            <br>
                            <br>
                        @endcan

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
