<?php

namespace App\Http\Controllers\Combinasi;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;


class AdminController extends Controller
{
    public function index()
    {
    	$admin = DB::table('admins')->get();		// mengambil data dari table admin
    	return view('admin.list-siswa',['admin' => $admin]);
    		// mengirim data admin ke view index
    }

      public function save(Request $request)
    {
	 	$admin = new Admin;
		$admin -> name       = $request -> input('name');
		$admin -> email      = $request -> input('email');
		$admin -> password   = $request -> input('password');
		$admin -> class      = $request -> input('class');
		$admin -> derection  = $request -> input('derection');
		$admin -> gender     = $request -> input('gender');
 		$admin -> point      = $request -> input('point');
 		$admin -> save();
 		return redirect('/admin');
	}


	public function add()
	{
		return view('admin.create-student');
	}

	public function store(Request $request)
	{
		//insert data ke table infraction
			DB::table('admins')->insert([
			'name'     => $request -> input('name'),
			'email'    => $request -> input('email'),
			'password' => $request -> input('password'),
			'class'    => $request -> input('class'),
			'derection'=> $request -> input('derection'),
			'gender'   => $request -> input('gender'),
			'point'    => $request -> input('point')
		]);

		return redirect('/admin');		
	}

	public function edit($id)
	{
		$admin = DB::table('admins')-> where('id', $id) -> get();
		return view('admin.update-student',['admin' => $admin]);			

	}

	public function update(Request $request)
	{
		DB::table('admins')-> where('id',$request->id) -> update([
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

	DB::table('admins')->where('id',$id)->delete();
	
	return redirect('/admin');
	}

}
