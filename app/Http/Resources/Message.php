<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Message extends JsonResource
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
            'data'=>[
                'id' => $this->id,
                'email' => $this->email,
                'name' => $this->name,
                'subject' => $this->subject,
                'body' => $this->body,
            ]
        ];
    }
}
