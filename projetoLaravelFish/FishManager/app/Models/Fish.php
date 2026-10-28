<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fish extends Model
{
    use HasFactory;

    protected $table = 'fishes';

    protected $fillable = [
        'name',
        'type_id',
        'weight',
        'tank_code',
        'status',
    ];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}