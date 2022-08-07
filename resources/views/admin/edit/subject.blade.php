@extends('layouts.master')

@section('content')

<div style="padding-left: 7%;  padding-right: 7%;", >

<div class="card">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <a  href="" class="btn btn-primary">Go somewhere</a>
  </div>
</div>


<form action="{{route('subjectt.update', $subject->id )}}" method="POST">
@csrf
@method('PUT')
	<div class="container" style="padding-top: 7%;">

		<div class="input-group mb-3">
  	<div class="input-group-prepend">
   	 <span class="input-group-text" id="inputGroup-sizing-default">subject</span>
  	</div>
 	 <input type="text" name="subject" value="{{$subject->subject}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
	</div>

		<div class="input-group mb-3">
	 	 <div class="input-group-prepend">
	    <span class="input-group-text">date</span>
	  </div>
	  <input type="text" name="date" value="{{$subject->date}}" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
	</div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">time</span>
        </div>
        <input type="text" name="time" value="{{$subject->time}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
      </div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	    <span class="input-group-text" id="inputGroup-sizing-default">The class</span>
	  </div>
    <select class="form-control" name="class_id" required>
      <option value selected disabled hidden>Select class</option>
      @foreach($classes as $classes)
      <option  value="{{$classes->id}}" @if($subject->class_id==$classes->id) selected @endif>{{$classes->name}}</option>
      @endforeach
  </select>
	</div>




<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        save
      </div>
      <div class="modal-footer">
      	
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </div>
    </div>
  </div>
</div>






</form></div></div>



@endsection>


