<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Types_report;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Agent_company extends Pivot
{
    //use HasFactory;
    protected $table="agent_company";
    protected $fillable = ['agent_company_no', 'agent_no', 'company_no'];
    public $timestamps=false;



}
