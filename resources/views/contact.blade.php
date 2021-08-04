@extends('layouts._header')
@section('title','| Contact')



    @section ('content')
    
    <div class="container my-200" style="margin: 250px auto;">
        <div class="row">

            <div class="col order-1" style="text-align: center">
                E-Mail <br> @if($findRow) {{$data->email}} @else N/A @endif
            </div>

            <div class="col order-1" style="text-align: center">
                Phone <br>@if($findRow) {{$data->phone}} @else N/A @endif
            </div>

            <div class="col order-1" style="text-align: center">
                Address <br> @if($findRow) {{$data->address}} @else N/A @endif
            </div>
        </div>
    </div>
    
    @endsection