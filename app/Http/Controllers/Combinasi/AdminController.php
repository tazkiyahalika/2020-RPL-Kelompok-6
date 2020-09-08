<?php

namespace App\Http\Controllers\Combinasi;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Infraction;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
    	$students = User::
    	where('role_id', '2')
    	->get();		
    	return view('admin.list-student',['students' => $students]);
    		// mengirim data student ke view index
    }


    public function addpoint()
    {

    	$data= User::where('role_id','2')
    	->select('users.id','users.name')
    	->get();

    	$datap= Infraction::all();
    	
    	
    	return view('admin.input-point',['data' => $data],['datap' => $datap]);

    }

    // public function plus($a, $b){
    //     return $a + $b;
    // }

    public function hitung(Request $request)
	{
		$update_user = User::whereId($request->input('id_user'))->first();
		$update_user->point += $request->input('point');
		$update_user->save();
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

		User::where('id',$id)->delete();
		return redirect('/admin');

	//DB::table('users')->where('id',$id)->delete();
	
	//return redirect('/admin');
	}

}
