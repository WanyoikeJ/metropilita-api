<?php

namespace App\Models\Faqdetails;

use App\Models\Faqs\Faqs;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faqdetails extends Model
{
    use HasFactory;

    public function details()
    {
        return $this->belongsTo(Faqs::class);
    }
}
