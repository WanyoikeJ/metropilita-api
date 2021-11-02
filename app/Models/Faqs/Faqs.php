<?php

namespace App\Models\Faqs;

use App\Models\Categories\Categories;
use App\Models\Faqdetails\Faqdetails;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faqs extends Model
{
    use HasFactory;

    public function categories()
    {
        return $this->belongsTo(Categories::class);
    }

    public function details()
    {
        return $this->hasMany(Faqdetails::class);
    }
}
