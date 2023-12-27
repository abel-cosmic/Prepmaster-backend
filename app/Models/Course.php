<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
//    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = ['dept_id','name'];

    public function department() {
        return $this->belongsTo(Department::class,'dept_id');
    }
}
