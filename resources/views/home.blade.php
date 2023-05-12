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
                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
