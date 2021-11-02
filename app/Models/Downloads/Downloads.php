<?php

namespace App\Models\Downloads;

use App\Models\Categories\Categories;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Downloads extends Model
{
    use HasFactory;

    public function categories()
    {
        return $this->belongsTo(Categories::class);
    }
}
