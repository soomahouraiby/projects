<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Types_report;
class Shipments extends Model
{
    //use HasFactory;
    protected $table="shipments";
    protected $fillable = ['shipment_no',  'production_date', 'expiry_date', 'quantity',
        'shipment_drawn', 'exception', 'price',

    ];
    protected $primaryKey = 'shipment_no';

    public $timestamps=false;

    public function drug(){
        return $this->belongsToMany('App\Models\commercial_drug',
            'batch_number',
            'shipment_no',
            'drug_no',
            'shipment_no',
            'drug_no');
    }



}
