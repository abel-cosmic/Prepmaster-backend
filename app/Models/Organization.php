<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
//    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 'email', 'phoneNumber', 'password', 'logo', 'brandColor'
    ];

    public function department(){
        return $this->hasMany(Department::class,'org_id');
    }
}

