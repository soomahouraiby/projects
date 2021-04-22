<?php

namespace App\Models;

use App\Models\Smuggled_drugs;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Commercial_drugs;
use App\Models\Types_report;
use App\Models\Sites;
use App\Models\Shipments;
use App\Models\Procedures;
use Illuminate\Database\Eloquent\Model;

class Reports extends Model
{
    //use HasFactory;
    protected $table = "reports";
    protected $fillable = [
        'report_no', 'report_date',  'notes_user', 'district','drug_picture',
        'authors_name','authors_phone', 'authors_character', 'authors_age','opmanage_notes',
        'transfer_party','transfer_date','type_report_no', 'smuggled_drugs_no', 'drug_no','agent_no'
    ];
    protected $primaryKey = 'report_no';

    protected $hidden = [
        'report_no',
    ];

    public $timestamps = false;

    public function type_report()
    {
        return $this->belongsTo(Types_report::class, 'type_report_no');
    }

    public function smuggled_drugs()
    {
        return $this->belongsTo(Smuggled_drugs::class, 'Smuggled_drugs_no');
    }

    public function drug()
    {
        return $this->belongsTo(Commercial_drugs::class, 'drug_no');
    }

    public function sit()
    {
        return $this->belongsTo(Sites::class, 'sit_no');
    }

    public function effective_material(){
        return $this->hasOneThrough(Effective_materials::class,Commercial_drugs::class);

    }

    public function shipment(){
        return $this->hasOneThrough(Shipments::class,commercial_drugs::class);

    }

    public function procedure(){
        return $this->hasMany('App\Models\Procedures','report_no');

    }

    public function procedure(){
        return $this->hasMany('App\Models\Procedures','report_no');

}
