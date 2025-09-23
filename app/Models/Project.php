<?php

namespace App\Models;

use App\Enums\ProjectStatus;
use App\Enums\PaymentStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;

class Project extends Model
{
    protected $guarded = [];

    protected $casts = [
        'status' => ProjectStatus::class,
        'payment_status' => PaymentStatus::class,
    ];

    protected static function boot(){
        parent::boot();
        static::creating(function ($model) {
            $model->uuid = Str::uuid();
        });

    }

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

    public function getPaymentStatusAttribute(): PaymentStatus
    {
        if ($this->total_paid >= $this->total_price) {
            return PaymentStatus::Paid;
        } elseif ($this->total_paid > 0) {
            return PaymentStatus::Partial;
        } else {
            return PaymentStatus::Unpaid;
        }
    }

    public function getProgressAttribute(): float
    {
        $totalFeatures = $this->features()->count();
        if ($totalFeatures === 0) {
            return 0;
        }

        $completedFeatures = $this->features()->wherePivot('is_completed', true)->count();

        return round(($completedFeatures / $totalFeatures) * 100, 1);
    }

}
