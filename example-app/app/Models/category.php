<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable = [
        "name"
    ];
    public $timestamps = false;
    protected $table = "category";
    use HasFactory;

    public function product()
    {
        return $this->hasMany("App\Models\product");
    }
}
