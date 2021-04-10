<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Types_report;
use App\Models\Commercial_drugs;
class Reports extends Model
{
    //use HasFactory;
    protected $table = "reports";
    protected $fillable = [
        'report_no', 'report_date', 'pharmacy_address', 'notes_user', 'district',
        'comerical_name','material_name','drug_picture','companies_name','agent_name',
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
            'type_report_no','type_report_no');
    }

    public function app_user()
    {
        return $this->hasOne('App\Models\App_users',
            'app_user_no');
    }

    public function drug()
    {
        return $this->belongsTo('App\Models\Commercial_drugs',
            'drug_no');
    }

    public function report_details()
    {
        return $this->belongsTo('App\Models\Report_detailes',
            'report_details_no', 'report_details_no');
    }


    public function sit()
    {
        return $this->belongsTo('App\Models\Sites',
            'sit_no', 'site_no');
    }

    public function effective_material(){
        return $this->hasOneThrough('App\Models\Effective_materials','App\Models\Commercial_drugs',
        'report_no','drug_no');
    }


}
