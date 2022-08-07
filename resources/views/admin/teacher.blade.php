@extends('layouts.master')

@section('content')


<div class="jumbotron container">
  <h1 class="display-4">Teachers</h1>

  <a class="btn btn-primary btn-lg" href="{{route('teacher.create')}}" role="button">Create</a>
</div>

<div class="container">
@if($message = Session::get('sccess'))
<div class="alert alert-primary" role="alert">
 {{$message}}
</div>
@endif
</div>

<div class='container'>
	<table class="table">
  <thead class="thead-dark" >

    <tr>
      <th scope="col"  >#</th>
      <th scope="col"  >first name</th>
      <th scope="col"  >last name</th>
      <th scope="col"  >phone</th>
      <th scope="col"  >subject</th>
      <th scope="col"  >class name</th>
      <th scope="col"  >Action</th>
    </tr>
  </thead>

  <tbody>
    @php
    $i=0
    @endphp
@foreach($teacher as $item)
    <tr>
      <th scope="row">{{++ $i}}</th>
      <td>{{$item->first_name}}</td>
      <td>{{$item->last_name}}</td>
      <td>{{$item->phone}}</td>
      <td>{{$item->subject}}</td>
      <td>{{$item->class_name}}</td>
      <td>
          <div class="row" style="width:200px;">
    <div class="col-sm">
      <a class="btn btn-secondary" href="{{route('teacher.edit', $item->id)}}"> Edit</a>
    </div>
    <div class="col-sm">
                <form action="{{route('teacher.destroy', $item->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">
              Delete
            </button>
          </form>
    </div>
  </div>
      
      	


      </td>
    </tr>
@endforeach

  </tbody>
</table>

</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>





@endsection