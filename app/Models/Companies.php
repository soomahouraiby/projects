<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Types_report;
class Companies extends Model
{
    //use HasFactory;
    protected $table="companies";
    protected $fillable = [
        'company_no',
        'company_name',
        'company_country',
        'agent_no',

    ];
    public $timestamps=false;

//    public function noticeDetails(){
//        return $this->belongsTo(type_notices::class,'type_notice_no');
//    }

//    protected $hidden = [
//       'companie_no',
//    ];
    public function agent(){
        //  return $this->belongsToMany(Commercial_drugs::class,'combination');
        return $this->belongsToMany('App\Models\Agents',
            'agent_company',
            'company_no',
            'agent_no',
            'company_no',
            'agent_no');

    }

}
