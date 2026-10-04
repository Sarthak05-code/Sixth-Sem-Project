<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\User;
use App\Models\Resource;

class Institution extends Model
{
    protected $fillable = [
        'name',
        'email_domain',
    ];

    public function users() : HasMany {
        return $this->hasMany(User::class);
    }

    public function resource() {
        return $this->hasMany(Resource::class);
    }
}
