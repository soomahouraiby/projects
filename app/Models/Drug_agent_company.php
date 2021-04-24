<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Types_report;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Drug_agent_company extends Pivot
{
    //use HasFactory;
    protected $table="drug_agent_company";
    protected $fillable = ['drug_agent_company_no', 'agent_company_no', 'drug_no'];
    public $timestamps=false;

}
