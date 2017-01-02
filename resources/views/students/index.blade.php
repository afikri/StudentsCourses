@extends('app')
@section('content')
<div class="row">
	<div class="col-sm-12">
		<a href="{{url('student/create')}}" class="btn btn-primary" style="margin:20px;">Create</a>
	</div>

    <div class="title">List Name of Students and Courses</div> 
        <div class="col-md-6">
            <table class="table table-striped">
            <thead>
            <tr>
            <th>Nr</th>
            <th>List of the Students</th>
            <th>List of the Courses</th>
			<th>Address</th>

            </tr>
            </thead>
            <tbody>
				<?php 
                $nr=1;
                foreach($students as $student){
                  foreach($student->courses as  $course){?>
                  <tr>
                    <td>{{$nr}}</td>
                    <td>{{$student->name}}</td>
                    <td>{{$course->name}}</td> 
					<td>{{$student->address()->student_id}}</td>
                  </tr>
                  <?php 
                  }
                  $nr++;
                }?>             

            </tbody>                
            </table>
        </div> 
    </div>                
</div>

@stop
 

