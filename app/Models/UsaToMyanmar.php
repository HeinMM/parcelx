<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsaToMyanmar extends Model
{
    use HasFactory;

    protected $casts = [
        'assign_at' => 'datetime',
        'road_at' => 'datetime',
        'complete_at' => 'datetime'
      ];
}
