<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Types_report;
class Diseases extends Model
{
    //use HasFactory;
    protected $table="diseases";
    protected $fillable = [
        'disease_no',
        'diseases_name',

    ];

    public $timestamps=false;
//    public function noticeDetails(){
//        return $this->belongsTo(type_notices::class,'type_notice_no');
//    }

//    protected $hidden = [
//        'disease_no',
//    ];

}
