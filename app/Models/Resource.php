<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Resource extends Model
{
    protected $fillable = [
        'title',
        'description',
        'category',
        'url',
        'file_path',
        'user_id',
        'institution_id'
    ];

    public function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function institution() : BelongsTo {
        return $this->belongsTo(Institution::class);
    }
}
