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
    protected $fillable = [
        'drug_no', 'drug_name', 'drug_interance', 'drug_picture', 'register_no',
        'barcode', 'drug_form', 'how_to_use', 'side_effects', 'shipment_no',
    ];
    public $timestamps=false;
    protected $primaryKey = 'drug_no';
//    protected $hidden = [
//         'drug_no',
//    ];

    public function effective_materials(){
        return $this->belongsToMany(Effective_materials::class, Combinations::class,
            'drug_no','material_no','drug_no');
    }
    public function shipment(){
        return $this->hasMany(Shipments::class,'shipment_no','shipment_no');
    }
}
