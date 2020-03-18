<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Cashier\Subscription;

class Package extends Model
{
    protected $fillable = ['name', 'description', 'subscription_id', 'price', 'composer_package', 'downloaded'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subscriptions()
    {
        return $this->hasMany(\App\Subscription::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
