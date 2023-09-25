<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class UserCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'current_page' => $this->currentPage(),
            'data' => UserResource::collection($this->collection),
            'last_page'=> $this->lastPage(),
            'per_page'=> $this->perPage(),
            'prev_page_url'=> $this->previousPageUrl(),
        ];
    }
}
