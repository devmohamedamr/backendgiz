<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = "product";
    use HasFactory;

    public function category(){
        return $this->belongsTo("App\Models\category");
    }
}
