<?php

namespace App\Http\Responses;

use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;
use App\User;
use App\Tag;
use App\Post;
use App\Like;
use App\Http\Controllers\AuthController;

class ProfileResponse implements Responsable
{
    public function toResponse($request)
    {
        $userId = self::getUserId($request);

        $userPosts = self::getUserPosts($userId);

        $userPosts = self::addPostTagName($userPosts);
        
        $likedPostsIds = self::getLikedPostsIds($userId);
       
        $likedPosts = self::getLikedPosts($likedPostsIds);

        return view('user.profile', ['userPosts' => $userPosts, 'likedPosts' => $likedPosts]);
    }

    private static function getUserId($request)
    {
        return $request->session()->get('user')->id;;
    }

    private static function getUserPosts($userId)
    {
        return Post::select('header', 'created_at', 'time_to_read', 'tag_id', 'id')
        ->where('user_id', $userId)
        ->get();
    }

    private static function getPostTagName($userPost)
    {
        return Tag::select('name')->where('id', $userPost->tag_id)->first();
    }

    private static function addPostTagName($userPosts)
    {
        foreach($userPosts as $userPost)
        {
            $postTagName = self::getPostTagName($userPost);
            $userPost['tagName'] = $postTagName->name;
        }
        return $userPosts;
    }

    private static function getLikedPostsIds($userId)
    {
        return Like::select('post_id')->where('user_id', $userId)->get();
    }

    private static function getPost($post_id)
    {
        return Post::select('header', 'created_at', 'time_to_read', 'tag_id', 'id', 'user_id')
                     ->where('id', $post_id)
                     ->first();
    }

    private static function getAuthor($user_id)
    {
        return User::select('username')->where('id', $user_id)->first();
    }

    private static function getTagName($tag_id)
    {
        return Tag::select('name')->where('id', $tag_id)->first();
    }

    private static function getLikedPosts($likedPostsIds)
    {
        $likedPosts = array();

        foreach($likedPostsIds as $likedPostId)
        {
            $likedPost = self::getPost($likedPostId->post_id);
            $author = self::getAuthor($likedPost->user_id);
            $postTagName = self::getTagName($likedPost->tag_id);
            $likedPost['tagName'] = $postTagName->name;
            $likedPost['author'] = $author->username;
            array_push($likedPosts, $likedPost);
        }

        return $likedPosts;
    }
}