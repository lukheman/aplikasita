<?php

namespace App\Observers;

use App\Models\Project;

class ProjectObserver
{
    public function created(Project $project): void
    {
        $project->price = ($project->base_price + $project->features()->sum('price')) ?: 0;
        $project->saveQuietly();
    }

    public function updated(Project $project): void
    {
        $project->price = ($project->base_price + $project->features()->sum('price')) ?: 0;
        $project->saveQuietly();
    }

    public function pivotSynced(Project $project, string $relation, array $changes): void
    {
        $project->price = ($project->base_price + $project->features()->sum('price')) ?: 0;
        $project->saveQuietly();
    }
}
