<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Note;

class Tag extends Model
{
    protected $fillable = ['name',];

    public function notes() {
        return $this->belongsToMany(Note::class);
    }
}
