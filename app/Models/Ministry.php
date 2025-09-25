<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ministry extends Model
{
    protected $fillable = ['name', 'description', 'image_url', 'leader_id', 'is_active'];
    public $timestamps = false;

    public function leader(): BelongsTo
    {
        return $this->belongsTo(User::class, 'leader_id');
    }
}
