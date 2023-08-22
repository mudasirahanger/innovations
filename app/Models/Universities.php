<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Universities extends Model
{

    protected $table = 'universities'; // If table name is different, specify it here.
    protected $primaryKey = 'uni_id'; // If primary key is different, specify it here.
    protected $fillable = ['name','status'];
    public $timestamps = false; // Set to false if you don't want timestamps (created_at and updated_at).


    public static function getUnivName($uni_id)
    {

        $uniname = DB::table('universities')->select('name')
            ->where('uni_id', $uni_id)
            ->get()->toArray();

        return $uniname[0]->name;
    }

          
}