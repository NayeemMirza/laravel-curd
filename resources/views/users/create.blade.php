@extends('layouts.app')
@section('main')

<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Users</h1>
        <a href="/users" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-angle-left fa-sm text-white-50"></i> Back</a>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Add User</h6>
                </div>
                <div class="card-body">
                    <form action="/users/store" method='POST'>
                    @csrf
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label>First Name</label>
                                <input type="text" class="form-control" name='firstName' value="{{ old('firstName') }}">
                                @if($errors->has('firstName'))
                                    <span class="text-danger">{{ $errors->first('firstName')}}</span>
                                @endif
                            </div>
                            <div class="col-sm-6">
                                <label>Last Name</label>
                                <input type="text" class="form-control" name='lastName' value="{{ old('lastName') }}">
                                @if($errors->has('lastName'))
                                    <span class="text-danger">{{ $errors->first('lastName')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label>Phone</label>
                                <input type="text" class="form-control" name='phone' value="{{ old('phone') }}">
                                @if($errors->has('phone'))
                                    <span class="text-danger">{{ $errors->first('phone')}}</span>
                                @endif
                            </div>
                            <div class="col-sm-6">
                                <label>Email</label>
                                <input type="email" class="form-control" name='email' value="{{ old('email') }}">
                                @if($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <label>Designation</label>
                                <input type="text" class="form-control" name='designation' value="{{ old('designation') }}">
                                @if($errors->has('designation'))
                                    <span class="text-danger">{{ $errors->first('designation')}}</span>
                                @endif
                            </div> 
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <button class="btn btn-md btn-primary" type="submit">Submit</button>
                            </div> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection