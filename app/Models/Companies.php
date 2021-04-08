<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Types_report;
class Companies extends Model
{
    //use HasFactory;
    protected $table="companies";
    protected $fillable = [
        'companie_no',
        'companie_name',
        'companie_country',
        'agent_no',

    ];
    public $timestamps=false;

//    public function noticeDetails(){
//        return $this->belongsTo(type_notices::class,'type_notice_no');
//    }

//    protected $hidden = [
//       'companie_no',
//    ];

}
