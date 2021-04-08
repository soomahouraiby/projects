<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Types_report;
class Sites extends Model
{
    //use HasFactory;
    protected $table="site";
    protected $fillable = [
        'site_no',
        'pharmacy_name',
        'street_name',
        'neig_name',
        'sit_dec',
    ];


//    public function noticeDetails(){
//        return $this->belongsTo(type_notices::class,'type_notice_no');
//    }

//    protected $hidden = [
//         'site_no',
//    ];

    public $timestamps=false;

}
