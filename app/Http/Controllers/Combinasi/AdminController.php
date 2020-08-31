<?php

namespace App\Http\Controllers\Combinasi;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;


class AdminController extends Controller
{
    public function index()
    {
    	$students = DB::table('users')
    	->where('role_id', '2')
    	->get();		
    	return view('admin.list-student',['students' => $students]);
    		// mengirim data student ke view index
    }

    public function addpoint()
    {
    	$data= DB::table('users')
    	->select('name')
    	->where('role_id','2')
    	->get();
    	return view('admin.input-point',['data' => $data]);

    }

    public function hitung()
	{

		$p1 = DB::table('users')
		->select('point')
		->where('id')
		->get();

		$p2 = ($p1);
		$p3 = ($p1 + $p2);

		DB::table('users')->insert([
			'point'    => $request -> input($p3)
		]);


	}

 //      public function save(Request $request)
 //    {
	//  	$student = new User;
	// 	$student -> name       = $request -> input('name');
	// 	$student -> class      = $request -> input('class');
	// 	$student -> direction  = $request -> input('direction');
	// 	$student -> gender     = $request -> input('gender');
 // 		$student -> point      = $request -> input('point');
 // 		$student -> email      = $request -> input('email');
	// 	$student -> password   = $request -> input('password');
 // 		$student -> save();
 // 		return redirect('/student');
	// }


	public function add()
	{
		return view('admin.create-student');
	}

	public function store(Request $request)
	{
		//insert data ke table infraction
			DB::table('users')->insert([
			'role_id' => 2,
			'name'     => $request -> input('name'),
			'class'    => $request -> input('class'),
			'direction'=> $request -> input('direction'),
			'gender'   => $request -> input('gender'),
			'point'    => $request -> input('point'),
			'email'    => $request -> input('email'),
			'password' => bcrypt('12345678')
		]);

		return redirect('/admin');		
	}

	public function edit($id)
	{
		$student = DB::table('users')-> where('id', $id) -> get();
		return view('admin.update-student',['student' => $student]);			

	}

	public function update(Request $request)
	{
		DB::table('users')-> where('id',$request->id) -> update([
			'name'     => $request ->name,
			'class'    => $request ->class,
			'direction'=> $request ->direction,
			'gender'   => $request ->gender,
			'point'    => $request ->point,
			'email'    => $request ->email,
			'password' => bcrypt('12345678')

		]);	

		return redirect('/admin');	
	}
   
	public function delete($id)
	{

	DB::table('users')->where('id',$id)->delete();
	
	return redirect('/admin');
	}

}
