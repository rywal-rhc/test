<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FlashcardResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'content' => $this->content,
            'category' => $this->category,
            'level' => $this->level,
            'image_url' => $this->image_url,
        ];
    }
        
}
