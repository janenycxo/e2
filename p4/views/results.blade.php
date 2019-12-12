@extends('templates.master')

@section('title')
History of Results
@endsection

@section('content')
   
<h2>History of Game Results</h2>
    </ul>
@foreach($results as $result)
    {{ $result['title'] }}</li>
@endforeach
</ul>

@endsection