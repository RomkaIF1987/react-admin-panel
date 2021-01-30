<?php

namespace App\Http\Resources\HeaderNavigation;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Support\Collection;

class HeaderNavigationCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  Request  $request
     * @return Collection
     */
    public function toArray($request): Collection
    {
        return
            $this->collection->map(
                function ($resource) use ($request) {
                    return (new HeaderNavigationResource($resource))->toArray($request);
                }
            );
    }
}
