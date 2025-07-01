<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Feature extends Model
{
    protected $guarded = [];

    public function projects(): BelongsToMany {
        return $this->belongsToMany(Project::class, 'project_feature');
    }
}
