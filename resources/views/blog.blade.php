@extends('layouts._header')
@section('title','| Contact')

    @section ('content')
    <div class="container" style="margin: 50px auto;">
        @foreach($data as $data)
        <hr>
        <div class="blog" style="margin-bottom: 50px;">
            <h2>{{$data->title}}</h2>
            <p>{{$data->body}}</p>
        </div>
        
        @endforeach
    </div>
    @endsection