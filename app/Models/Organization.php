<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'phoneNumber',
        'email',
        'password',
        'logo',
        'brandColor',
    ];


    public function admins()
    {
        return $this->hasMany(Admin::class);
    }
    public function organizationSubscriptions()
    {
        return $this->hasMany(OrganizationSubscription::class);
    }
}

