<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tag;
use App\User;

class Home extends Controller
{
    //
    public function getHome()
    {
        $tagsIDs = Post::select('tag_id')->distinct()->get();

        $tags = $this->getTagsAttributes($tagsIDs);
        
        return view('home', ['tags' => $tags]);  
    }

    private function getTagsAttributes($tagIDs)
    {
        
        $tags = array();

        foreach($tagIDs as $tagId)
        {
            $tag = array();

            $tagName = Tag::select('name')->where('id', $tagId->tag_id)->first();
            array_push($tag, $tagName);

            $tagPosts = Post::select(array('header', 'created_at', 'time_to_read', 'user_id', 'id'))->where('tag_id', $tagId->tag_id)->get();

            foreach($tagPosts as $tagPost)
            {
                $userId = $tagPost->user_id;
                $username = User::select('username')->where('id', $userId)->get()->first();
                $tagPost['username'] = $username['username'];
            }
            
            array_push($tag, $tagPosts);
            
            array_push($tags, $tag);
        }
        $tags = json_encode($tags);
        
        return $tags;
    }
}
