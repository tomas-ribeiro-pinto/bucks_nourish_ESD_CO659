<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Organization extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];

    public function foodbanks()
    {
        return $this->hasMany(Foodbank::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
