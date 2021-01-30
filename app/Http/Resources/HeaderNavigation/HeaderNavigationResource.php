<?php

namespace App\Http\Resources\HeaderNavigation;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HeaderNavigationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'link_url' => $this->link_url,
            'is_dropdown' => $this->is_dropdown,
            'parent_id' => $this->parent_id,
            'show' => $this->show,
            'edit' => $this->edit,
            'delete' => $this->delete,
        ];
    }
}
