<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class Upload extends Model
{

    protected $table = 'upload'; // If table name is different, specify it here.
    protected $primaryKey = 'upload_id'; // If primary key is different, specify it here.
    protected $fillable = ['innovation_id','user_id', 'heading_innovator','name_innovator','email_innovator','phone_innovator', 'about','uni_id','dept_id','patentno','innovation_type','photo','photo_innovation','photo_innovation1','photo_innovation2','photo_innovation3','status'];
    public $timestamps = true;


    public static function UpdateInnv($data){

        DB::table('upload')->where('upload_id' , $data->upload_id)
        ->update([
            'status' => $data->status,
            'updated_at' => Carbon::now()
        ]);

        DB::table('upload_detials')->insert([
            'upload_id' => $data->upload_id,
            'user_id' => $data->user_id,
            'status' => $data->status,
            'created_at' => Carbon::now()
        ]);

      }
    
       
}