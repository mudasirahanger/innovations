<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Departments extends Model
{

    protected $table = 'departments'; // If table name is different, specify it here.
    protected $primaryKey = 'dept_id'; // If primary key is different, specify it here.
    protected $fillable = ['name','status'];
    public $timestamps = false; // Set to false if you don't want timestamps (created_at and updated_at).


    
    public static function getDeptName($dept_id)
    {

        $deptname = DB::table('departments')->select('name')
            ->where('dept_id', $dept_id)
            ->get()->toArray();

        return $deptname[0]->name;
    }

  
       
}