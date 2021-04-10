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
        'age', 'charactore', 'gender', 'date_of_birth', 'number_of_report',
    ];
    protected $primaryKey = 'app_user_no';
    public $timestamps=false;

//    protected $hidden = [
//        'app_user_no',
//    ];

}
