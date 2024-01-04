<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;

    public function admins()
    {
        return $this->hasMany(Admin::class);
    }
    public function organizationSubscriptions()
    {
        return $this->hasMany(OrganizationSubscription::class);
    }
}

