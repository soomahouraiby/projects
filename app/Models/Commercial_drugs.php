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
        'how_to_use', 'drug_form', 'side_effects',  'shipment_no','agent_no'
    ];
    public $timestamps=false;
    protected $primaryKey = 'drug_no';

    public function report(){
        return $this -> hasMany('App\Models\Reports','drug_no');
    }

    public function effective_materials(){
        return $this->belongsToMany('App\Models\Effective_materials')->using('App\Models\Combinations');
//        return $this->belongsToMany('App\Models\Effective_materials', 'combination',
//            'material_no')->withPivot('drug_no');

    }


    public function shipment(){
        return $this->hasMany(Shipments::class,'shipment_no','shipment_no');
    }

    public function agent(){
        return $this->belongsTo(Agents::class,'agent_no');
    }
}
