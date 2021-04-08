<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Types_report;
class Procedures extends Model
{
    //use HasFactory;
    protected $table="procedures";
    protected $fillable = [
        'procedure_no',
        'procedur',
        'procedure_date',
        'procedure_resulte',
        'follow_no',

    ];
    public $timestamps=false;

//    public function noticeDetails(){
//        return $this->belongsTo(type_notices::class,'type_notice_no');
//    }

//    protected $hidden = [
//         'procedure_no',
//    ];

}
