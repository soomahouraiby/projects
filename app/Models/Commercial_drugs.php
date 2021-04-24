<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Effective_materials;
use App\Models\Shipments;
use App\Models\Combinations;

class Commercial_drugs extends Model
{
    //use HasFactory;
    protected $table="commercial_drug";
    protected $filliable = [
        'drug_no', 'drug_name', 'register_no', 'barcode', 'drug_entrance','drug_photo',
        'how_to_use', 'drug_form', 'side_effects', 'agent_no','company_no'
    ];
    public $timestamps=false;
    protected $primaryKey = 'drug_no';

    public function report(){
        return $this -> hasMany('App\Models\Reports','drug_no');
    }

    public function effective_material(){
        return $this->belongsToMany('App\Models\effective_material',
            'Combinations',
            'drug_no',
            'material_no',
            'drug_no',
            'material_no');
    }

    public function shipment(){
        return $this->belongsToMany('App\Models\Shipments',
            'batch_number',
            'drug_no',
            'shipment_no',
            'drug_no',
            'shipment_no');
    }


    public function company(){
        return $this->belongsTo(Companies::class,'company_no');
    }

    public function agent(){
        return $this -> belongsTo('App\Models\Agents','agent_no');
    }


}
