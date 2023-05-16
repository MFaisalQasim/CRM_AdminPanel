@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <form action="{{ route('items.create.step.three.post') }}" method="post">
                    {{ csrf_field() }}
                    <div class="card">
                        <div class="card-header">Step 3: Review Details</div>

                        <div class="card-body">

                            <table class="table">
                                <tr>
                                    <td>Item Name:</td>
                                    <td><strong>{{ $item->name }}</strong></td>
                                </tr>
                                <tr>
                                    <td>Item Amount:</td>
                                    <td><strong>{{ $item->amount }}</strong></td>
                                </tr>
                                <tr>
                                    <td>Item status:</td>
                                    <td><strong>{{ $item->status ? 'Active' : 'DeActive' }}</strong></td>
                                </tr>
                                <tr>
                                    <td>Item Description:</td>
                                    <td><strong>{{ $item->description }}</strong></td>
                                </tr>
                                <tr>
                                    <td>Item Stock:</td>
                                    <td><strong>{{ $item->stock }}</strong></td>
                                </tr>
                            </table>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-md-6 text-left">
                                    <a href="{{ route('items.create.step.two') }}"
                                        class="btn btn-danger pull-right">Previous</a>
                                </div>
                                <div class="col-md-6 text-right">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
