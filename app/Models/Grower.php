<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grower extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public function workers()
    {
        return $this->hasMany(Worker::class);
    }
}
