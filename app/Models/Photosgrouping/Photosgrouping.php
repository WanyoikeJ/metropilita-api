<?php

namespace App\Models\Photosgrouping;

use App\Models\Photos\photos_photosgroupings;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photosgrouping extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'categories_id',
    ];

    public function categories()
    {
        return $this->belongsTo(Categories::class);
    }

    public function photosgroupings()
    {
        return $this->hasMany(photos_photosgroupings::class, 'photosgroupings_id');
    }
}
