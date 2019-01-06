<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Breeds extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'id' => $this->id,
             'breed' => $this->breed,
             'height' => $this->height,
             'weight' => $this->weight,
             'history' => $this->history,
             'traits' => $this->traits,
             'reviewed' => $this->reviewed,
             'img_link' => $this->img_link,
             'user_id' => $this->user_id,
             'visits' => $this->visits,
             'created_at' => $this->created_at,
             'updated_at' => $this->updated_at
        ]
    }
}
