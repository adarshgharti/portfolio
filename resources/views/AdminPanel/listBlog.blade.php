@extends('AdminPanel.layouts._main')
@section('title', '| Blog')

@section('content')


<table class="table">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Options</th>
    </tr>
  </thead>
  <tbody>

  @foreach($data as $data)
  
    <tr>
      <th scope="row">1</th>
      <td>{{$data->title}}</td>
      <td>{{$data->body}}</td>
      <td><a href="{{route('edit.blog', $data->id)}}" class="btn btn-primary">Edit</a>
      <a href="{{route('delete.blog', $data->id)}}" class="btn btn-primary">Delete</a></td>
    </tr>
  @endforeach

</table>

<hr>

<form style="width: 100%; margin:0 auto; margin-top: 10px" action="{{route('new.blog')}}" method="Post">
<h3>Add New Blog</h3>
@csrf
<div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" id="title" aria-describedby="emailHelp" >
  </div>

  <div class="form-group">
    <label for="body">Body</label>
    <textarea class="form-control" id="body" name="body" rows="3" ></textarea>
    <input type="hidden" name="id" value="{{$data->id}}">    
</div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<br><br>


@endsection
