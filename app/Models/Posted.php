<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Types_report;
class Posted extends Model
{
    //use HasFactory;
    protected $table="posted";
    protected $fillable = ['id', 'title', 'content', 'user_id'
    ];
    public $timestamps=false;





}
