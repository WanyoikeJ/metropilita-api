<?php

namespace App\Http\Resources\Photos;

use Illuminate\Http\Resources\Json\JsonResource;

class ImagesResources extends JsonResource
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
            'thumb' => $this->photos->thumb,
            'image' => $this->photos->image,
            'status' => $this->photos->status,
            'description' => $this->photos->description,
        ];
    }
}
