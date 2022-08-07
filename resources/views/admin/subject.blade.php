@extends('layouts.master')

@section('content')


<div class="jumbotron container">
  <h1 class="display-4">Subject</h1>

  <a class="btn btn-primary btn-lg" href="{{route('subjectt.create')}}" role="button">Create</a>
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
        <th scope="col">subject</th>
        <th scope="col">date</th>
        <th scope="col">time</th>
        <th scope="col">class</th>

        <th scope="col">Action</th>
      </tr>
    </thead>
  
    <tbody>
  @foreach( $subject as $item)
      <tr>
        <th>{{$item->subject}}</th>
        <td>{{$item->date}}</td>
        <td>{{$item->time}}</td>
        <td> 

          {{$item->classes->name}}




      </td>

        <td>
          <div class="row" style="width:200px;">
    <div class="col-sm">
      <a class="btn btn-secondary" href="{{route('subjectt.edit', $item->id)}}"> Edit</a>
    </div>
    <div class="col-sm">
                <form action="{{route('subjectt.destroy', $item->id)}}" method="POST">
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