<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Types_report;
class Shipments extends Model
{
    //use HasFactory;
    protected $table="shipments";
    protected $fillable = ['shipment_no', 'batch_number', 'production_date', 'expiry_date', 'quantity',
        'shipment_drawn', 'exception', 'price', 'agent_no',

    ];
    protected $primaryKey = 'shipment_no';

    public $timestamps=false;
//    public function noticeDetails(){
//        return $this->belongsTo(type_notices::class,'type_notice_no');
//    }

//    protected $hidden = [
//       'shipment_no',
//    ];

}
