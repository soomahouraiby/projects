<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Types_report;
class Commerical_drugs extends Model
{
    //use HasFactory;
    protected $table="Commerical_drug";
    protected $fillable = [
        'drug_no',
        'drug_name',
        'drug_interance',
        'drug_picture',
        'register_no',
        'barcode',
        'drug_form',
        'how_to_use',
        'side_effects',
        'shipment_no',

    ];
    public $timestamps=false;

//    public function noticeDetails(){
//        return $this->belongsTo(type_notices::class,'type_notice_no');
//    }

//    protected $hidden = [
//         'drug_no',
//    ];

}
