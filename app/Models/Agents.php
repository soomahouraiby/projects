<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Types_report;
class Agents extends Model
{
    //use HasFactory;
    protected $table="agents";
    protected $fillable = ['agent_no', 'agent_name', 'agent_phone', 'agent_email', 'agent_address',
    ];
    public $timestamps=false;

//    public function noticeDetails(){
//        return $this->belongsTo(type_notices::class,'type_notice_no');
//    }

//    protected $hidden = [
//        'agent_no',
//    ];

}
