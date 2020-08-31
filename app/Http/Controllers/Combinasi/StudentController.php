<?php

namespace App\Http\Controllers\Combinasi;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
	public function index()
	{
		$user = DB::table('users')
		->where('role_id', '2')
    	->get();
		 return view('student.data-student',['user' => $user]);
	}

	public function detail()
	{
		$user = DB::table('users')
		->where('role_id','2')
		->select('users.id','users.name','users.class','users.direction','users.gender','users.point','users.email',
			'infractions.name_infraction','infractions.point')
		->join('infractions','infractions.id','=','users.id')
		->get();

		 return view('student.detail-student',['user' => $user]);
	}


	
  
}
