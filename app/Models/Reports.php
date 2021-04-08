<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Types_report;
class Reports extends Model
{
    //use HasFactory;
    protected $table = "reports";
    protected $fillable = [
        'report_no', 'report_date', 'pharmacy_address', 'notes_user', 'district',
        'presented_report', 'report_status', 'app_user_no', 'type_report_no',
        'drug_no', 'report_details_no', 'sit_no',
    ];
    protected $primaryKey = 'report_no';


    protected $hidden = [
        'report_no',
    ];

    public $timestamps = false;

    public function type_report()
    {
        return $this->belongsTo('App\Models\Types_report',
            'type_report_no', 'type_report_no');
    }


}
