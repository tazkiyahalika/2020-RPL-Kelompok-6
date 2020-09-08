<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Infraction extends Model
{
   
     // protected $table ='infraction';
     // gak perlu di define nama tablenya kalo sesuai singular dan pluralnya

		use SoftDeletes;


		protected $dates = ['deleted_at'];

    	protected $protected = [];

    	


}
