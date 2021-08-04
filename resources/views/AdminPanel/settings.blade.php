@extends('AdminPanel.layouts._main')
@section('title', '| Blog')

@section ('content')


<div class="container my-5">
    
    <form action="{{ route('insert.fresh.details') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label"><b>Name</b></label>
            @if($findRow == true)
                <input type="text" class="form-control" id="name" name="name" value="{{$data->name}}">
            @else
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter full name">
            @endif
        </div>
        <div class="mb-3">
            <label for="email" class="form-label"><b>E-Mail</b></label>
            @if($findRow)
            <input type="email" class="form-control" id="email" name="email" value="{{$data->email}}">
            @else
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter E-Mail">
            @endif
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label"><b>Phone</b></label>
            @if($findRow)
            <input type="text" class="form-control" id="phone" name="phone" value="{{$data->phone}}">
            @else
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone Number">
            @endif
        </div>

        <div class="mb-3">
            <label for="address" class="form-label"><b>Address</b></label>
            @if($findRow)
            <input type="text" class="form-control" id="address" name="address" value="{{$data->address}}" >
            @else
            <input type="text" class="form-control" id="address" name="address" placeholder="Eneter your address" >
            @endif
        </div>

        <div class="mb-3">
            <label for="education" class="form-label"><b>Education</b></label>
            @if($findRow)
            <input type="text" class="form-control" id="education" name="education" value="{{$data->education}}">
            @else
            <input type="text" class="form-control" id="education" name="education" placeholder="Enter your qualification">
            @endif
        </div>

        <div class="mb-3">
            <label for="description" class="form-label"><b>Description</b></label>
            @if($findRow)
            <textarea class="form-control" id="description" name="description" rows="3" >{{$data->description}}</textarea>
            @else
            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter a short description"></textarea>
            @endif
        </div>

        @if($findRow)
        <input type="hidden" name="id" value= "{{$data->id}}">
        @endif
        
        @if($findRow)
            <button type="submit" class="btn btn-primary">Update Data</button>
        @else
            <button type="submit" class="btn btn-primary">Insert Data</button>
        @endif

    
    </form>
</div>

@endsection