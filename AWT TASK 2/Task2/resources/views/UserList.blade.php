@extends('layouts.app')
@section('content')

    <table class="table table-borded">
        <tr>
            <th>Name</th>
            <th>Id</th>
            <th>Dob</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
        @foreach($registrations as $user)
            <tr>
                <td>{{$user->Name}}</td>
                <td>{{$user->Id}}</td>
                <td>{{$user->DOB}}</td>
                <td>{{$user->Email}}</td>
                <td>{{$user->Phone}}</td>

            </tr>
        @endforeach
    </table>
@endsection