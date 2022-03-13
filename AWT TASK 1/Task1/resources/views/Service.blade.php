@extends('Layouts.Nav')

@section('content')
<h1> Welcome to Our Service page <h1>
    <h2>My Products</h2>
    @foreach ($product as $item)
    {{
        $item
    }}
    <?php 
        echo "<br>";
        ?>
    @endforeach
    @endsection


