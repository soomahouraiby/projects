<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class  Report_side_effects extends Model
{
    //use HasFactory;
    protected $table=" report_side_effects";
    protected $fillable = [
        'report_side_effect_no', 'date_start_use',  'dose', 'status_stop_use', 'date_stop_use','how_get_drug',
         'drug_user_no ', 'report_no','expiration_date','Relation_with_patient','purpose_of_use','how_use_drug'
    ];
    public $timestamps=false;


    public function report()
    {
        return $this->belongsTo(Reports::class, 'report_no');
    }

}
