<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Types_report;
class Concentrations extends Model
{
    //use HasFactory;
    protected $table="concentration";
    protected $fillable = [
        'con_no',
        'con',
        'dose',
        'drug_no',

    ];
    public $timestamps=false;

//    public function noticeDetails(){
//        return $this->belongsTo(type_notices::class,'type_notice_no');
//    }

//    protected $hidden = [
//        'con_no',
//    ];

}
