<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Types_report;
class Follows extends Model
{
    //use HasFactory;
    protected $table="follow";
    protected $fillable = [
        'follow_no',
        'transfer_date',
        'op_man_notes',

    ];

    public $timestamps=false;
//    public function noticeDetails(){
//        return $this->belongsTo(type_notices::class,'type_notice_no');
//    }

//    protected $hidden = [
//       'follow_no',
//    ];

}
