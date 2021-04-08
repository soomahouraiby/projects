<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Types_report;
class Effective_materials extends Model
{
    //use HasFactory;
    protected $table="effective_material";
    protected $fillable = [
        'material_no',
        'material_name',
        'indications_for_use',
    ];

    public $timestamps=false;
//    public function noticeDetails(){
//        return $this->belongsTo(type_notices::class,'type_notice_no');
//    }

//    protected $hidden = [
//        'material_no',
//    ];

}
