<?php

namespace App\Http\Resources\Photos;

use Illuminate\Http\Resources\Json\JsonResource;

class PhotosResource extends JsonResource
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
            'description' => $this->description,
            'photos' => ImagesResources::collection($this->photosgroupings),
        ];
    }
}
