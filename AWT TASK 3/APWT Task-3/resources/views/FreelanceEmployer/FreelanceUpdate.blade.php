@extends('layouts.app')
@section('content')
<h2>Employee Update - Employee </h2>
    <form action="{{route('updatesubmit')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}

        
        <div class="form-group">
            <span>Name</span>
            <input type="text" name="name" value="{{$Freelance->Name}}" class="form-control">
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>

            <div class="form-group">
            <span>Username</span>
            <input type="text" name="username" value="{{$Freelance->Username}}"  readonly="readonly" class="form-control">
            @error('username')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>

            <div class="form-group">
            <span>Email</span>
            <input type="text" name="email" value="{{$Freelance->Email}}" class="form-control">
            @error('email')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>


            <div class="form-group">
            <span>Address</span>
            <input type="text" name="address" value="{{$Freelance->Address}}" class="form-control">
            @error('address')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>


            <div class="form-group">
            <span>Password</span>
            <input type="text" name="password" value="{{$Freelance->Password}}" class="form-control">
            @error('password')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>

            <div class="form-group">
            <span>Phone</span>
            <input type="phone" name="phone" value="{{$Freelance->Phone}}" class="form-control">
            @error('phone')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>

            <div class="form-group">
            <span>Job Type</span>
            <input type="text" name="jobtype" value="{{$Freelance->Job_Type}}" class="form-control">
            @error('jobtype')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>


        <div class="form-group">
        
        <input type="submit" class="btn btn-success" value="Update" ></li>
        </div>
    </form>

    @endsection