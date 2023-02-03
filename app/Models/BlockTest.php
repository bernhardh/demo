<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlockTest extends Model
{
    protected $casts = [
        "blocks" => "array"
    ];
}
