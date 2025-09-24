<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Concurso extends Model
{
    use HasFactory;

    protected $fillable = [
        'cod',
    ];

    public function lotofacil(): HasMany
    {
        return $this->hasMany(Lotofacil::class, 'cod', 'cod');
    }
}
