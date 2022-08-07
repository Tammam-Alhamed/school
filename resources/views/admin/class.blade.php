@extends('layouts.master')

@section('content')


<div class="jumbotron container">
  <h1 class="display-4">Class</h1>

  <a class="btn btn-primary btn-lg" href="{{route('classes.create')}}" role="button">Create</a>
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
      <th scope="col"  >name</th>
      <th scope="col"   >Action</th>
    </tr>
  </thead>

  <tbody>
    @php
    $i=0 
    @endphp
@foreach($classes as $item)
    <tr>
      <th scope="row">{{++ $i}}</th>
      <td>{{$item->name}}</td>
      <td>

        <div class="row"  style="width:250px;">
          <div class="col-sm">

            <a class="btn btn-secondary" href="{{route('subject.class' , $item->id)}}" > subject</a>


          </div>
          <div class="col-sm">
            <form action="{{route('classes.destroy', $item->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">
          Delete
        </button>
      </form>
</div>

      </td>
    </tr>
@endforeach



  </tbody>
</table>

</div>




<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


@endsection
