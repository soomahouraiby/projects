<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sites extends Model
{
    //use HasFactory;
    protected $table="site";
    protected $fillable = [
        'site_no', 'pharmacy_name', 'street_name', 'neig_name', 'sit_dec',
    ];

    protected $hidden = [
         'site_no',
    ];

    public $timestamps=false;

}
