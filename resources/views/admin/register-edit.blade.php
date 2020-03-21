@extends('layouts.admin')


@section('title')

    Edit-Registered | ForexEmpire

@endsection


 
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Edit Role for Registered User.</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <form action="/role-register-update/{{ $users->id }}" method="POST">

                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}

                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="username" value="{{ $users->name }}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Give Role</label>
                                        <select name="usertype" class="form-control">
                                            <option value="admin">Admin</option>
                                            <option value="vendor">Vendor</option>
                                            <option value="">None</option>
                                        </select>
                                    </div>  
                                    <button type="submit" class="btn btn-success">Update</button>
                                    <a href="/role-register" class="btn btn-danger">Cancel</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>        
            </div>
        </div>
    </div>

@endsection



@section('scripts')


@endsection
