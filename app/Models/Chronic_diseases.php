<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Types_report;
class Chronic_diseases extends Model
{
    //use HasFactory;
    protected $table="chronic_diseases";
    protected $fillable = [
        'ch_di_no',
        'disease_no',
        'app_user_no',

    ];

    public $timestamps=false;
//    public function noticeDetails(){
//        return $this->belongsTo(type_notices::class,'type_notice_no');
//    }

//    protected $hidden = [
//        'ch_di_no',
//    ];

}
