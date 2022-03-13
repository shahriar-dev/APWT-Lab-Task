@extends('layouts.app')
@section('content')


<?php if(Session::has('freelance_id')) {?>
    <h1>This is Employer Dashboard</h1>


        <h3>Name :  {{ $FreelanceEmployer->Name }} </h3>
        <h3>Username :  {{ $FreelanceEmployer->Username }}</h3>
        <h3>Email :  {{ $FreelanceEmployer->Email }}</h3>
        <h3>Address : {{ $FreelanceEmployer->Address }} </h3>
        <h3>Phone :  {{ $FreelanceEmployer->Phone }}</h3>
        <h3>Job Type :  {{ $FreelanceEmployer->Job_Type }}</h3>

        <td><a  class="btn btn-info" href="/Employer/update/{{$FreelanceEmployer->id}}/{{$FreelanceEmployer->Username}}">Update</a></td>


<?php }

else if(Session::has('admin_id')) {?>
    <h1>This is Admin's Dashboard</h1>

    
         <h3>Username :  {{ $Admin->Username }} </h3>
        <h3>Email :  {{ $Admin->Email }}</h3>
        <h3>Phone :  {{ $Admin->Phone }}</h3>

        <td><a  class="btn btn-info" href="/Admin/update/{{$Admin->id}}/{{$Admin->Username}}">Update</a></td>



<?php }?>


@endsection