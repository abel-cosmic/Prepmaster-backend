<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;
    public function departments()
    {
        return $this->belongsTo(Department::class);
    }
    public function studentSubscriptions()
    {
        return $this->hasMany(StudentSubscription::class);
    }
    public function courses()
    {
        return $this->belongsTo(Course::class);
    }
}
