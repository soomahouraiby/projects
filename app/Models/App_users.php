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
        'age',  'gender','report_count' ,'adjective',
    ];
    protected $primaryKey = 'app_user_no';
    public $timestamps=false;

    public function report(){
        return $this->hasMany('App\Models\Report','report_no');

    }

    public function disees(){
        return $this->belongsToMany('App\Models\Diseases',
            'app_user_diseases',
            'app_user_no',
            'disease_no',
            'app_user_no',
            'disease_no');
    }

}
