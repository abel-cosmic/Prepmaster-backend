<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganizationSubscription extends Model
{
    use HasFactory;

    protected $fillable=[
        'org_id',
        'subscription_id',
        'subscription_start_date',
        'subscription_end_date',
        'subscription_status',
    ];

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }
}
