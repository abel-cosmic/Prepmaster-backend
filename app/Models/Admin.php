<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    public function organizations()
    {
        return $this->belongsTo(Organization::class);
    }
    public function departments()
    {
        return $this->belongsTo(Department::class);
    }
    public function courses()
    {
        return $this->belongsTo(Course::class);
    }
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
