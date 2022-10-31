<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class CategoryCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'categories' => $this->collection->map(function ($item) {
                return [
                    'id' => $item->id,
                    'name' => $item->name,
                    'active' => $item->active == 1 ? 'Active' : 'Inactive',
                    'createAt' => $item->created_at,
                ];
            }),
        ];
    }

    public function with($request)
    {
        return [
            'status' => 1
        ];
    }
}
