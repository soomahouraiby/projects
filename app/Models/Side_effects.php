<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Types_report;
class Side_effects extends Model
{
    //use HasFactory;
    protected $table="side_effects";
    protected $fillable = [
        'side_effect_no',
        'side_effect',
        'date_st_effect',
        'range_dangerous',
        'status_patient_now',
        'side_effect_removed','removed_date',
        'drug_user_no',

    ];
    public $timestamps=false;

//    public function noticeDetails(){
//        return $this->belongsTo(type_notices::class,'type_notice_no');
//    }

//    protected $hidden = [
//        'side_effect_no',
//    ];

}
