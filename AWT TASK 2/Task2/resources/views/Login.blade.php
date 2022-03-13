@extends('layouts.app')
@section('content')
    <form action="{{route('student.login')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        

        <div class="form-group">
            <span>Email</span>
            <input type="text" name="email" value="{{old('email')}}" class="form-control">
            @error('email')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <span>Password</span>
            <input type="password" name="Password" value="{{old('Password')}}" class="form-control">
            @error('Password')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <input type="submit" class="btn btn-success btn-sm" value="Login" >
    </form>

    @endsection