<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Types_report;
class Combinations extends Model
{
    //use HasFactory;
    protected $table=" combination";
    protected $fillable = ['ction_no', 'material_no', 'drug_no',

    ];
    public $timestamps=false;

//    public function noticeDetails(){
//        return $this->belongsTo(type_notices::class,'type_notice_no');
//    }

//    protected $hidden = [
//        'ction_no',
//    ];

}
