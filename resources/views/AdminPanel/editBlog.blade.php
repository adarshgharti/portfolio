@extends('AdminPanel.layouts._main')
@section('title', '| Blog')

@section('content')

<form style="width: 100%; margin:0 auto; margin-top: 10px" action="{{route('update.blog')}}" method="Post">
@csrf
<div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" id="title" aria-describedby="emailHelp" value="{{$data->title}}" >
  </div>

  <div class="form-group">
    <label for="body">Body</label>
    <textarea class="form-control" id="body" name="body" rows="3" >{{$data->body}}</textarea>
    <input type="hidden" name="id" value="{{$data->id}}">    
</div>


 
    


  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection