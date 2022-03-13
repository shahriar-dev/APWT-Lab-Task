@extends('layouts.app')
@section('content')
    <form action="{{route('student.create')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        
        <div class="form-group">
            <span>Name</span>
            <input type="text" name="name" value="{{old('name')}}" class="form-control">
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <span>Id</span>
            <input type="text" name="id" value="{{old('id')}}"class="form-control">
            @error('id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <span>Date of Birth</span>
            <input type="date" name="dob" value="{{old('dob')}}" class="form-control">
            @error('dob')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            <span>Email</span>
            <input type="text" name="email" value="{{old('email')}}" class="form-control">
            @error('email')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            <span>Phone</span>
            <input type="text" name="phone" value="{{old('phone')}}" class="form-control">
            @error('phone')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <span>Password</span>
            <input type="text" name="password" value="{{old('password')}}" class="form-control">
            @error('password')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <input type="submit" class="btn btn-success btn-sm" value="Registration" >
    </form>

    @endsection