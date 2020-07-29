<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
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
            'postId'=>$request->postId,
            'commentcontent'=>$request->commentcontent
       
        ];
    }

    public function with($request)
    {
        return[
            'version'=>'1.0.0',
        
        ];
    }
}
