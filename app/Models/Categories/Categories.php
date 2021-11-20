<?php

namespace App\Models\Categories;

use App\Models\Branches\Branches;
use App\Models\Downloads\Downloads;
use App\Models\Faqs\Faqs;
use App\Models\Photosgrouping\Photosgrouping;
use App\Models\Servicecenters\Servicecenters;
use App\Models\Services\Services;
use App\Models\Traits\HasChildren;
use App\Models\Traits\IsOrderable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Categories extends Model
{
    use HasChildren, IsOrderable, HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'status',
        'childstatus',
        'order',
        'parent_id',
        'banner',
        'description',
        'meta',
        'title',
        'h1'
    ];

    public static function boot()
    {
        parent::boot();
        static::creating(function ($user) {
            $user->slug = Str::slug(request()->name, '-');
        });
    }

    public function children()
    {
        return $this->hasMany(Categories::class, 'parent_id', 'id')->orderBy('name')->where('status', true);
    }

    public function parent()
    {
        return $this->belongsTo(Categories::class, 'parent_id', 'id')->where('status', true);
    }

    public function adminparent()
    {
        return $this->belongsTo(Category::class, 'parent_id', 'id');
    }

    public function services()
    {
        return $this->belongsToMany(Services::class);
    }

    public function branches()
    {
        return $this->hasMany(Branches::class);
    }

    public function servicecenters()
    {
        return $this->hasMany(Servicecenters::class);
    }

    public function faqs()
    {
        return $this->hasMany(Faqs::class);
    }

    public function downloads()
    {
        return $this->hasMany(Downloads::class);
    }

    public function photosgrouping()
    {
        return $this->hasMany(Photosgrouping::class);
    }
}
