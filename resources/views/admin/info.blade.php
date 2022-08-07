@extends('layouts.master')

@section('content')

<div style="padding-left: 7%;  padding-right: 7%;", >



 @foreach($info as $info)
    


<center><p class="shadow-lg p-3 mb-5 bg-body rounded"> <h1>School information</h1></p></center> 



<form action="{{route('info.update' ,$info->id)}}" method="POST">
@csrf
@method('PUT')
	<div class="container" style="padding-top: 7%;">

		<div class="input-group mb-3">
  	<div class="input-group-prepend">
   	 <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
  	</div>
 	 <input type="text" name="name" value="{{$info->name}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
	</div>

		<div class="input-group mb-3">
	 	 <div class="input-group-prepend">
	    <span class="input-group-text">maneger</span>
	  </div>
	  <input type="text" name="maneger" value="{{$info->maneger}}" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	    <span class="input-group-text" id="inputGroup-sizing-default">location</span>
	  </div>
	  <input type="text" name="location" value="{{$info->location}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
	</div>



<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Edit
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        save the information
      </div>
      <div class="modal-footer">
      	<div class="input-group mb-3">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </div>
    </div>
  </div>
</div>



</div>
</div></form>
@endforeach
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@endsection