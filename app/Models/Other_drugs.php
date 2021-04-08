<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Types_report;
class Other_drugs extends Model
{
    //use HasFactory;
    protected $table="other_drug";
    protected $fillable = [
        'o_drug_no',
        'drug_name',
        'dose',
        'date_start_use',
        'date_end_use',
        'purpose_of_use',

    ];
    public $timestamps=false;

//    public function noticeDetails(){
//        return $this->belongsTo(type_notices::class,'type_notice_no');
//    }

//    protected $hidden = [
//        'o_drug_no',
//    ];

}
