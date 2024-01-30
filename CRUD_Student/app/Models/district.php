<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class district extends Model
{   
    protected $guarded=['_token'];
    use HasFactory;

    public function students()
{
    return $this->hasMany(Student::class);
}

}
