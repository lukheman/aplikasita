<?php

namespace App\Observers;

use App\Models\Feature;

class FeatureObserver
{
    public function updated(Feature $feature): void
    {
        foreach ($feature->projects as $project) {
            $project->price = $project->features()->sum('price') ?: 0;
            $project->saveQuietly();
        }
    }
}
