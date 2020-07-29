<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
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
            'id'=>$request->id,
            'user_id'=>$request->user_id,
            'title'=>$request->title,
            'postcontent'=>$request->postcontent
        ];
    }

    public function with($request)
    {
        return[
            'version'=>'1.0.0',
        ];
    }
}
