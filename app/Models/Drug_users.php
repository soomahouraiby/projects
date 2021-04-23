<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Types_report;
class Drug_users extends Model
{
    //use HasFactory;
    protected $table="drug_user";
    protected $fillable = [
        'drug_user_no',
        'drug_user_name',
        'age',
        'height',
        'weight',
        'gender',

    ];

    public $timestamps=false;
//    public function noticeDetails(){
//        return $this->belongsTo(type_notices::class,'type_notice_no');
//    }

//    protected $hidden = [
//         'drug_user_no',
//    ];

}
