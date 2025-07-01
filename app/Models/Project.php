<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Project extends Model
{
    protected $guarded = [];

    protected $casts = [
        'status' => \App\Enums\ProjectStatus::class,
        'payment_status' => \App\Enums\PaymentStatus::class,
    ];

    public function customer() {
        return $this->belongsTo(Customer::class);
    }

    public function payments() {
        return $this->hasMany(Payment::class);
    }

    public function features(): BelongsToMany
    {
        return $this->belongsToMany(Feature::class, 'project_feature')
                    ->withPivot('id', 'is_completed')
                    ->withTimestamps();
    }

    public function getTotalPriceAttribute(): float
    {
        return ($this->base_price + $this->features()->sum('price')) ?: 0;
    }
}
