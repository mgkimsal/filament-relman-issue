<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function grower()
    {
        return $this->belongsTo(Grower::class);
    }
}
