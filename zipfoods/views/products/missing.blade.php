@extends('templates.master')
    
@section('title')
  Not in System
@endsection

@section('content')

    <h2> Item <?=$_GET['id'];
    ?> cannot be found</h2>
       
    The item you are looking for is not available in our system.


    <div>
    <a href='/products'>Please check out our other products...</a>
    </div>
    @endsection

