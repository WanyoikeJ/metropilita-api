<?php

namespace App\Models\Photos;

use App\Models\Photosgrouping\Photosgrouping;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class photos_photosgroupings extends Model
{
    use HasFactory;

    protected $fillable = [
        'photos_id',
        'photosgroupings_id',
    ];

    public function photos()
    {
        return $this->belongsTo(Photos::class, 'id');
    }

    public function photosgroupings()
    {
        return $this->belongsTo(Photosgrouping::class);
    }
}
