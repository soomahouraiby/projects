<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Types_report;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Combinations extends Pivot
{
    //use HasFactory;
    protected $table="Drug_material";
    protected $fillable = ['combination_no', 'material_no', 'drug_no'];
    public $timestamps=false;

}
