<?php

namespace App\Scoping\Scopes;

use App\Scoping\Contracts\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Log;

class CategoryScope implements Scope
{
    public function apply(Builder $builder, $value)
    {
        return $builder->whereHas('categories', function ($builder) use ($value) {
            $builder->where('slug', $value);
        });
    }
}
