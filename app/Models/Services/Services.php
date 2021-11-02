<?php

namespace App\Models\Services;

use App\Models\Categories\Categories;
use App\Models\Servicesdetails\Servicesdetails;
use App\Models\Traits\CanBeScoped;
use App\Models\Traits\IsOrderable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory, IsOrderable, CanBeScoped;

    public function categories()
    {
        return $this->belongsToMany(Categories::class);
    }
    public function servicedetails()
    {
        return $this->hasMany(Servicesdetails::class);
    }
}
