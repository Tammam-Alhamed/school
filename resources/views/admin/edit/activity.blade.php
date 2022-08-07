@extends('layouts.master')

@section('content')

<div style="padding-left: 7%;  padding-right: 7%;", >

  <div class="jumbotron container">
    <h1 class="display-4">Create Activity</h1>
  
  </div>


<form enctype="multipart/form-data" action="{{route('activity.update' , $activity) }}" method="POST">
@csrf
@method('PUT')
	<div class="container" style="padding-top: 7%;">

		<div class="input-group mb-3">
  	<div class="input-group-prepend">
   	 <span class="input-group-text" id="inputGroup-sizing-default">slug</span>
  	</div>
 	 <input type="text" name="slug" value="{{$activity->slug}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
	</div>

    <div class="mb-3">
        <label for="formFile" class="form-label">Photo</label>
        <input class="form-control" name="photo"  type="file" id="formFile">
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






</form></div>



@endsection

