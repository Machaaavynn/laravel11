<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    public function department()
{
    return $this->belongsTo(Department::class);
}

public function students()
{
    return $this->hasMany(Student::class);
}

}
