<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DataResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "id" => (string)$this->id,
            "type" => $this->data,
            "attributes" => [
                "title" => $this->name,
                "body" => $this->body,
                "created_at" => $this->created_at,
                "updated_at" => $this->updated_at
            ]

        ];
    }
}
