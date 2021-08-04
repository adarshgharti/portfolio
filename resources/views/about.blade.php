@extends('layouts._header')
@section('title','| About')



@section ('content')
<div class="container my-2">
        <div class="container my-200" style="margin-top: 200px auto;">
            <div class="row">

                <div class="col order-1" style="text-align: center">
                    <b>Name </b><br> @if($findRow) {{$data->name}} @else N/A @endif
                </div>

                <div class="col order-1" style="text-align: center">
                <b>E-Mail</b> <br> @if($findRow) {{$data->email}} @else N/A @endif
                </div>

                <div class="col order-1" style="text-align: center">
                <b>Address</b> <br> @if($findRow) {{$data->address}} @else N/A @endif
                </div>
            </div>

            <div class="row">
                <div class="col order-1" style="text-align: center">
                <b>Education</b> <br> @if($findRow) {{$data->education}} @else N/A @endif
            </div>
        </div>
    </div>

    <div class="container">
        <p> 
        @if($findRow) {{$data->description}} @endif
        </p>
    </div>


<style>
    .row {
        margin: 100px auto;
    }
</style>
@endsection