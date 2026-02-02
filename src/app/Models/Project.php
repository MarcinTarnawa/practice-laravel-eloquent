<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /** @use HasFactory<\Database\Factories\ProjectFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'code_link',
        'demo_link',
        'show',
    ];

    public function technologies()
    {
        return $this->hasMany(Technologie::class);
    }

}
