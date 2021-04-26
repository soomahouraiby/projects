<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Types_report;
class Other_drugs extends Model
{
    //use HasFactory;
    protected $table="other_drug";
    protected $fillable = [
        'o_drug_no',
        'drug_name',
        'dose',
        'date_start_use',
        'date_end_use',
        'purpose_of_use','report_side_effects_no'

    ];
    public $timestamps=false;

    public function report_detail()
    {
        return $this->belongsTo(Report_side_effects::class, 'report_side_effects_no');
    }

}
