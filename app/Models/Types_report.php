<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Types_report extends Model
{
    //use HasFactory;
    protected $table="types_reports";
    protected $fillable = [
        'type_report_no',
        'type_report',

    ];

    public $timestamps=false;

    protected $primaryKey = 'type_report_no';


//    protected $hidden = [
//         'type_report_no',
//    ];


}
