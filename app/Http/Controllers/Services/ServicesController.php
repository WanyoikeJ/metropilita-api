<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use App\Http\Resources\Categories\CategoriesResources;
use App\Models\Categories\Categories;
use App\Models\Services\Services;
use App\Scoping\Scopes\CategoryScope;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index(Request $request)
    {
        $service = Services::with(['servicedetails'])->withScopes($this->scopes())->ordered()->paginate(12);
        $category = new CategoriesResources(Categories::where('slug', $request->category)->with(['branches','branches.branchhours','branches.branchnumbers','servicecenters','faqs.details', 'downloads','photosgrouping.photosgroupings.photos'])->first());
        return response()->json([
            'data' => $service,
            'category' => $category,
        ]);
    }

    public function show(Services $pervices, Request $request)
    {}

    protected function scopes()
    {
        return [
            'category' => new CategoryScope()
        ];
    }
}
