<?php

namespace App\Models\Branches;

use App\Models\Branchhours\Branchhours;
use App\Models\Branchnumbers\Branchnumbers;
use App\Models\Categories\Categories;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branches extends Model
{
    use HasFactory;

    public function categories()
    {
        return $this->belongsTo(Categories::class);
    }

    public function branchhours()
    {
        return $this->hasMany(Branchhours::class);
    }

    public function branchnumbers()
    {
        return $this->hasMany(Branchnumbers::class);
    }
}
