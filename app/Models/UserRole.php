<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $fillable = [
        'user_id',
        'role_id'
    ];

    const ADMIN_ROLE = 1;
    const VOLUNTIER_ROLE = 2;
    const MEMBER_ROLE = 3;
}
