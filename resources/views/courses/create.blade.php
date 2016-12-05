@extends('app')
@section('content')
<div class="row" style="padding-top: 40px;">
  <!-- Blog Entries Column -->
	<div class="col-md-12">
  	{!! Form::open(['url' => '/course/store', 'method'=>'POST', 'files'=>'true']) !!}
	<div class="col-md-3">
    	{!! Form::label('Course Name') !!}
    	{!! Form::text('name',null,['class'=>'form-control']) !!}<br/>		
  	  	{!! Form::submit('Save', ['class' => 'btn btn-success btn-lg']) !!}	
	</div>

      {!! Form::close() !!}
  </div>
@stop


