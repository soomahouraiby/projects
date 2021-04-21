<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reports;
class Procedures extends Model
{
    //use HasFactory;
    protected $table="procedures";
    protected $fillable = [
        'procedure_no',
        'procedure',
        'procedure_date',
        'procedure_result',
        'report_no'

    ];
    public $timestamps=false;
    protected $primaryKey = 'procedure_no';

    public function sit()
    {
        return $this->belongsTo(Reports::class, 'sit_no');
    }
}
