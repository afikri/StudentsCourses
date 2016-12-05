<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Student;
use App\Course;

class StudentController extends Controller
{
	public function index(){
		$students = Student::all();
		return view('students.index', compact('students'));	
	}

	public function create(){
		$courses = Course::all();
		return view('students.create', compact('courses'));
	}

	public function store(Request $request){
		$student = new Student;		
		$student->name = $request->input('name');
		$student->save();

		$student->courses()->attach([$request->id]);

		return redirect()->back();
	}
}
