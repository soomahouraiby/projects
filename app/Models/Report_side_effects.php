<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class  Report_side_effects extends Model
{
    //use HasFactory;
    protected $table=" report_side_effects";
    protected $fillable = [
        'report_side_effects_no', 'authors_name', 'batch_number', 'authors_phone',
         'date_start_use',  'dose', 'status_stop_use', 'date_stop_use',
        'notes', 'drug_user_no ', 'o_drug_no ','report_no','expiration_date','Relation_with_patient'
    ];
    public $timestamps=false;


//    protected $hidden = [
//         'report_details_no',
//    ];

}
