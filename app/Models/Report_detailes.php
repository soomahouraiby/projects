<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Types_report;
class Report_detailes extends Model
{
    //use HasFactory;
    protected $table="report_detailes";
    protected $fillable = [
        'report_details_no',
        'type_drug',
        'batch_number',
        'how_get_drug',
        'form_drug',
        'date_start_use',
        'expiration_date',
        'dose',
        'status_stop_use',
        'date_stop_use',
        'notes',
        'drug_user_no ',
        'o_drug_no ',

    ];
    public $timestamps=false;

//    public function noticeDetails(){
//        return $this->belongsTo(type_notices::class,'type_notice_no');
//    }

//    protected $hidden = [
//         'report_details_no',
//    ];

}
