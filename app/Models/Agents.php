<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Types_report;
class Agents extends Model
{
    //use HasFactory;
    protected $table="agents";
    protected $fillable = ['agent_no', 'agent_name', 'agent_phone', 'agent_email', 'agent_address',
    ];
    public $timestamps=false;

    public function company(){
        return $this -> hasMany('App\Models\Companies','agent_no');
    }



}
