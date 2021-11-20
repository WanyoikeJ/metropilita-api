<?php

namespace App\Models\Photos;

use App\Models\Categories\Categories;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{
    use HasFactory;

    protected $fillable = [
        'thumb',
        'image',
        'status',
        'description',
    ];
}
