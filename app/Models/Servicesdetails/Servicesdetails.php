<?php

namespace App\Models\Servicesdetails;

use App\Models\Services\Services;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicesdetails extends Model
{
    use HasFactory;

    public function service()
    {
        return $this->belongsTo(Services::class);
    }
}
