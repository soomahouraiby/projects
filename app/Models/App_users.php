<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class App_users extends Model
{
    //use HasFactory;
    protected $table="app_user";
    protected $fillable = [
        'app_user_no', 'app_user_name', 'app_user_phone', 'app_user_email',
        'age',  'gender','report_count' ,
    ];
    protected $primaryKey = 'app_user_no';
    public $timestamps=false;

//    protected $hidden = [
//        'app_user_no',
//    ];

}
