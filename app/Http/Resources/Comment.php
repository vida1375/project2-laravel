<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Comment extends JsonResource
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
            'id' => $this->id,
            'post' => [
                'id'=>$this->post->id,
                'title'=>$this->post->title,
            ],
            'name' => $this->name,
            'text' => $this->text
        ];
    }
}
