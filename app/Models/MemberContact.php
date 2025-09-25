<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MemberContact extends Model
{
    use HasFactory; 
    
    protected $fillable = [
        'member_id', 
        'email',
        'phone_number_1',
        'phone_number_2'
    ];

    public $timestamps = false;

    public function member(): BelongsTo
    {
        return $this->belongsTo(Member::class);
    }
}
