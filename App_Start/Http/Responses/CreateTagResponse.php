<?php

namespace App\Http\Responses;

use Illuminate\Contracts\Support\Responsable;
use App\Tag;

class CreateTagResponse implements Responsable
{
    public function toResponse($request)
    {
        self::validateTagRequest($request);

        $tag = self::fillTagName($request);
        
        self::storeTagInDB($tag);

        return redirect('/add-tag');
    }

    private static function validateTagRequest($request)
    {   
        // check if request is vaild
        $request->validate([
            'tagName' => 'required',
        ]);

    }

    private static function fillTagName($request)
    {
        $tag = new Tag();
        $tag->name = $request->tagName;
        return $tag;
    }

    private static function storeTagInDB($tag)
    {
        $tag->save();
    }
}