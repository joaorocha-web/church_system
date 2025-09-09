<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MemberStatus extends Model
{
    protected $table = 'member_status';
    public function members(): HasMany
    {
        return $this->hasMany(Member::class);
    }
}
