<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Types_report;
class App_user_diseases extends Model
{
    //use HasFactory;
    protected $table="app_user_diseases";
    protected $fillable = [
        'us_di_no',
        'disease_no',
        'app_user_no',
        'con','dose'

    ];

    public $timestamps=false;


}
