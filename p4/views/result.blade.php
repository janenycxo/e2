@extends('templates.master')

@section('title')
{{ $post['title'] }}
Your result {{ $result['id'] }}
@endsection


@section('content')
<h2>Individual Result</h2>

<a href='/results'>&larr;Back to the list of Breeds that have started agility training.</a>

<div>
   <a href='http://p4.janenycxo.me/'>Click go back to main page and Play Again</a>
    </div>


@endsection