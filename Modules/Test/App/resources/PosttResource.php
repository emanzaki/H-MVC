<?php

namespace Modules\Test\App\resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PosttResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray($request): array
    {
        dd($this->resource);
        return [
            'id' => $this->id,
            'title' => $this->title,
            'content' => $this->content,
        ];
    }
}
