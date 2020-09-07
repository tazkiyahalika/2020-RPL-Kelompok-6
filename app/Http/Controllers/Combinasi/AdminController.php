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
    	->select('id','name')
    	->where('role_id','2')
    	->get();

    	$datap= DB::table('infractions')
    	->select('name_infraction','code')
    	->get();
    	
    	return view('admin.input-point',['data' => $data],['datap' => $datap]);

    }

    // public function plus($a, $b){
    //     return $a + $b;
    // }

    public function hitung(Request $request)
	{
		$name = $request -> input('name');
		$code = $request -> input('code');

		$id = DB::table('users')
    	->select('id')
    	->where('name',$name)
    	->get();

    	$class = DB::table('users')
    	->select('class')
    	->where('name',$name)
    	->first();

    	$direction = DB::table('users')
    	->select('direction')
    	->where('name',$name)
    	->first();

    	$gender = DB::table('users')
    	->select('gender')
    	->where('name',$name)
    	->first();

 		// $point1 = DB::table('users')->where('id', $id)->pluck('point');

    	$point1 = DB::table('users')
    	->select('point')
    	->where('name',$name)
    	->get()->toArray();

    	$email = DB::table('users')
    	->select('email')
    	->where('name',$name)
    	->first();

    	$password = DB::table('users')
    	->select('password')
    	->where('name',$name)
    	->first();

		if ($code == 'A1')
		{
			$point2 = 2;
		}
		elseif ($code == 'A2')
		{
			$point2 = 3;
		}
		elseif ($code == 'A3')
		{
			$point2 = 5;
		}
		elseif ($code == 'A4')
		{
			$point2 = 10;
		}
		elseif ($code == 'A5')
		{
			$point2 = 20;
		}
		elseif ($code == 'A6')
		{
			$point2 = 40;
		}
		elseif ($code == 'A7')
		{
			$point2 = 50;
		}
		elseif ($code == 'A8')
		{
			$point2 = 60;
		}
		elseif ($code == 'A9')
		{
			$point2 = 100;
		}

		$point = $point1[$name] + $point2;
		die(var_dump($point));

		// $point = $this->plus($point1,$point2);

		
		// $point = count($point1,$point2);
		DB::table('users')-> where('id',$request->id) -> update([
			'id' => $request -> input('id'),	
			'role_id' => 2,
			'name'     => $name,
			'class'    => $class,
			'direction'=> $direction,
			'gender'   => $gender,
			'point'	=> $point,
			'email'    => $email,
			'password' => $password
			]);

		return redirect('/admin');		

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
			'point'    => 0,
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
