<?php

namespace App\Http\Controllers\Combinasi;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;


class AdminController extends Controller
{
    public function index()
    {
    	$students = DB::table('students')->get();		// mengambil data dari table student
    	return view('admin.list-student',['students' => $students]);
    		// mengirim data student ke view index
    }

      public function save(Request $request)
    {
	 	$student = new student;
		$student -> name       = $request -> input('name');
		$student -> email      = $request -> input('email');
		$student -> password   = $request -> Hash::make('password');
		$student -> class      = $request -> input('class');
		$student -> derection  = $request -> input('derection');
		$student -> gender     = $request -> input('gender');
 		$student -> point      = $request -> input('point');
 		$student -> save();
 		return redirect('/student');
	}


	public function add()
	{
		return view('admin.create-student');
	}

	public function store(Request $request)
	{
		//insert data ke table infraction
			DB::table('students')->insert([
			'name'     => $request -> input('name'),
			'email'    => $request -> input('email'),
			'password' => $request -> Hash::make('password'),
			'class'    => $request -> input('class'),
			'derection'=> $request -> input('derection'),
			'gender'   => $request -> input('gender'),
			'point'    => $request -> input('point')
		]);

		return redirect('/admin');		
	}

	public function edit($id)
	{
		$student = DB::table('students')-> where('id', $id) -> get();
		return view('admin.update-student',['student' => $student]);			

	}

	public function update(Request $request)
	{
		DB::table('students')-> where('id',$request->id) -> update([
			'name'     => $request ->name,
			'email'    => $request ->email,
			'password' => $request ->password,
			'class'    => $request ->class,
			'derection'=> $request ->derection,
			'gender'   => $request ->gender,
			'point'    => $request ->point
		]);	

		return redirect('/admin');	
	}
   
	public function hapus($id)
	{

	DB::table('students')->where('id',$id)->delete();
	
	return redirect('/admin');
	}

}
