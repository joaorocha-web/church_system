<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'gender_id',
        'ministry_id',
        'situation_id',
        'birth_date',
        'membership_start',
    ];

    public function gender(): BelongsTo
    {
        return $this->belongsTo(Gender::class);
    }

    public function status(): BelongsTo
    {
        return $this->belongsTo(
            MemberStatus::class,
            'situation_id',  
            'id'           
        );
    }

    public function ministries(): BelongsToMany
    {
        return $this->belongsToMany(
            Ministry::class,
            'member_ministries',
            'member_id',
            'ministry_id'
        );
    }

    public function contact(): HasOne
    {
        return $this->HasOne(MemberContact::class);
    }


}
