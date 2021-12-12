<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vaccine extends Model
{
    use HasFactory;
    protected $table = "vaccines";
    public $timestamps = false;

    public function patient()
    {
        return $this->hasMany('App\Models\patient', 'vaccine_id', 'id');
    }
}
