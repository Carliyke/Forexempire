@extends('layouts.user')

@section('title')
    Dashboard | Forexempire
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header pb-4">
                    <div class="jumbotron jumbotron-fluid">
                        <div class="container">
                            <h4 class="display-4">Welcome, {{ Auth::user()->name }}!</h4>
                            <p class="lead">Sign up to our numerous packages bla! bla!! bla!!</p>
                        </div>
                    </div
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome to your Dashboard {{ Auth::user()->name }}!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('scripts')


@endsection
