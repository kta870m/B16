<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class provinces extends Model
{   
    protected $guarded=['_token'];
    use HasFactory;

    public function districts()
{
    return $this->hasMany(District::class);
}

}


