<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberMinistry extends Model
{
    use HasFactory;

    protected $fillable = ['member_id', 'ministry_id', 'status_id', 'start_date', 'end_date', 'assigned_by'];
}
