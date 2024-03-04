<?php

namespace Modules\Test\App\resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PostResource extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     */
    public function toArray($request): array
    {
        dd($this->resource);

        return [
            'data' => $this->collection,
        ];
    }
}
