<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
//    use HasFactory;
    protected $primaryKey = 'id';
    protected  $fillable = ['org_id','name'];

    public function organization(){
        return $this->belongsTo(Organization::class, 'org_id');
    }

    public function course(){
        return $this->hasMany(Course::class);
    }
}

