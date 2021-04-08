<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Types_report;
class System_users extends Model
{
    //use HasFactory;
    protected $table="system_users";
    protected $fillable = [
        'sm_user_no	',
        'sm_user_name',
        'sm_user_email',
        'sm_user_phone',
        'sm_user_address',
        'pass',
        'sm_user_belong',
        'district',

    ];


//    public function noticeDetails(){
//        return $this->belongsTo(type_notices::class,'type_notice_no');
//    }

//    protected $hidden = [
//        'sm_user_no	',
//    ];
    public $timestamps=false;
}
