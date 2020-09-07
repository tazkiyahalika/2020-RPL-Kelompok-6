<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ClassController extends Controller
{
    public function index()
    {
    	$class = DB::table('classes')->get();	
    	return view('class.list-class',['class' => $class]);
    } 
    public function add()
	{
		$class = DB::table('classes')
		->where('role_id','2')
		->select('users.id','users.direction','classes.name_class')
		->join('users','users.id','=','users.id')
		->get();

		return view('class.add-class');
	}
	public function store(Request $request)
	{
		
			DB::table('classes')->insert([
			'name_class' => $request -> input('name_class'),
			'direction' => $request -> input('direction')


		]);

		return redirect('/class');		
	}
	public function edit($id)
	{
		$class = DB::table('classes')-> where('id', $id) -> get(); 	
		return view('class.edit-class',['class' => $class]);			
		

	}

	public function update(Request $request)
	{
		DB::table('classes')-> where('id',$request->id) -> update([
			'name_class' => $request ->name_class,
			'direction' => $request ->direction
		]);	

		return redirect('/class');	
	}
	public function delete($id)
	{

	DB::table('classes')->where('id',$id)->delete();
	return redirect('/class');
	}

}
