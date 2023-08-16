<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $table = 'users_details'; // If table name is different, specify it here.
    protected $primaryKey = 'id'; // If primary key is different, specify it here.
    protected $fillable = ['user_id', 'uni_id', 'dept_id'];
    public $timestamps = false;


       
    
}