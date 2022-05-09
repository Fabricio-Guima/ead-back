<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LessonResource extends JsonResource
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
            'module_id' => $this->module_id,
            'name' => ucwords(strtolower($this->name)),
            'url' => $this->url,
            'description' => $this->description,
            'video' => $this->video,
        ];
    }
}
