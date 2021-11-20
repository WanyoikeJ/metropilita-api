<?php

namespace App\Http\Resources\Categories;

use App\Http\Resources\Photos\PhotosResource;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoriesResources extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slug,
            'banner' => $this->banner,
            'description' => $this->description,
            'h1' => $this->h1,
            'title' => $this->title,
            'meta' => $this->meta,
            'folder' => $this->folder,
            'layout' => $this->layout,
            'branches' => $this->branches,
            'servicecenters' => $this->servicecenters,
            'faqs' => $this->faqs,
            'downloads' => $this->downloads,
            'photosgrouping' => PhotosResource::collection($this->photosgrouping),
        ];
    }
}
