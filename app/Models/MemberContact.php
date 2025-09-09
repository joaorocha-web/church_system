<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MemberContact extends Model
{
    protected $fillable = [
        'member_id', 
        'email',
        'telefone_1',
        'telefone_2'
    ];

    public $timestamps = false;
}
