<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Course;

class CourseController extends Controller
{
    public function index(){
		$courses = Course::all();
		return view('courses.index', compact('courses'));	
	}

	public function create(){
		return view('courses.create');
	}

	public function store(Request $request){
		$course = new Course;		
		$course->name = $request->input('name');
		$course->save();

		return redirect()->back();
	}
}
