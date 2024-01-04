<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    public function students()
    {
        return $this->hasOne(Students::class);
    }
    public function admins()
    {
        return $this->hasMany(Admin::class);
    }
    public function courses()
    {
        return $this->hasMany(Course::class);
    }

}

