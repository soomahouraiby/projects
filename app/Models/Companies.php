<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Types_report;
class Companies extends Model
{
    //use HasFactory;
    protected $table="companies";
    protected $fillable = [
        'company_no',
        'company_name',
        'company_country',

    ];
    public $timestamps=false;



}
