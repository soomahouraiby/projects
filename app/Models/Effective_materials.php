<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Effective_materials extends Model
{
    //use HasFactory;
    protected $table="effective_material";
    protected $fillable = [
        'material_no', 'material_name', 'indications_for_use',
    ];

    public $timestamps=false;
    protected $primaryKey = 'material_no';

    protected $hidden = [
        'material_no',
    ];

    public function commercial_drug(){
        return $this->belongsToMany(Commercial_drugs::class,'combination');
    }
}
