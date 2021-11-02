<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use App\Http\Resources\Categories\CategoriesResource;
use App\Models\Categories\Categories;
use App\Models\Silder\Slider;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        return response()->json([
            'categories' => CategoriesResource::collection(Categories::where('status', true)->with(['children'])->parents()->ordered()->get()),
            'sliders' => Slider::where('status', true)->get()
        ], 200);
    }
}
