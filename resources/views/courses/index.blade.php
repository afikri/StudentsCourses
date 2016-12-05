@extends('app')
@section('content')
<div class="row">
	<div class="col-sm-12">
		<a href="{{url('course/create')}}" class="btn btn-primary" style="margin:20px;">Create</a>
	</div>

    <div class="title">List Name Courses</div> 
        <div class="col-md-6">
            <table class="table table-striped">
            <thead>
            <tr>
            <th>Nr</th>
            <th>List of the Courses</th>

            </tr>
            </thead>
            <tbody>
				@foreach($courses as $course)
                <tr>
				<td>{{$course->id}}</td>
				<td>{{$course->name}}</td>								
				</tr>        
				@endforeach
            </tbody>                
            </table>
        </div> 
    </div>                
</div>

@stop
 

