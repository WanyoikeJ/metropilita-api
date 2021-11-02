<?php

namespace App\Http\Resources\Categories;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoriesResource extends JsonResource
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
            'children' => CategoriesResource::collection($this->whenLoaded('children')),
        ];
    }
}
