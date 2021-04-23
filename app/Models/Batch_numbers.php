<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batch_numbers extends Model
{
    //use HasFactory;
    protected $table="batch_number";
    protected $fillable = ['id','batch_num','drug_no','shipment_no'];
    protected $primaryKey = 'id';
    public $timestamps=false;

//    protected $hidden = [
//        'app_user_no',
//    ];

}
