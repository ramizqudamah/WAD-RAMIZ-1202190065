<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    use HasFactory;
    protected $table = "patients";
    public $timestamps = false;

    public function vaccine()
    {
        return $this->belongsTo('App\Models\vaccine', 'vaccine_id', 'id');
    }
}
