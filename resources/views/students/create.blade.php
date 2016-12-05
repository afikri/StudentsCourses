@extends('app')
@section('content')
<div class="row" style="padding-top: 40px;">
  <!-- Blog Entries Column -->
	<div class="col-md-12">
  	{!! Form::open(['url' => '/student/store', 'method'=>'POST', 'files'=>'true']) !!}
	<div class="col-md-3">
    	{!! Form::label('Name') !!}
    	{!! Form::text('name',null,['class'=>'form-control']) !!}<br/>		

		{!! Form::label('Course')!!}
		<select class="form-control"name="id">
		@foreach($courses as $course)
        	<option value="{{$course->id}}">{{$course->name}}</option>
		@endforeach
		</select><br/>			
  	  	{!! Form::submit('Save', ['class' => 'btn btn-success btn-lg']) !!}	
	</div>

      {!! Form::close() !!}
  </div>
@stop


