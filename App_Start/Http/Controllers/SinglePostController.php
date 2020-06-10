<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Tag;
use App\User;
use App\Like;
use App\Comment;

class SinglePostController extends Controller
{
    public function GetSinglePostView($id)
    {
        $postData = self::getPostData($id);
        $tagName = self::getTagName($postData->tag_id);
        $username = self::getUsername($postData->user_id);
        $comments = self::getPostComments($postData->id);

        foreach($comments as $comment)
        {
            $commentUser = User::select('username')->where('id', $comment->user_id)->first();
            $comment['commentUser'] = $commentUser;
        }
        return View('user.single_post', [
            'postData' => $postData,
            'tagName' => $tagName,
            'username' => $username,
            'comments' => $comments
        ]);
    }

    private static function getPostData($id)
    {
        return Post::select(
            'id','header', 'content', 'time_to_read', 'created_at', 'tag_id', 'user_id')
            ->where('id', $id)->first();
    }
    
    private static function getTagName($tag_id)
    {
        return Tag::select('name')->where('id', $tag_id)->first();
    }

    private static function getUsername($user_id)
    {
        return User::select('username')->where('id', $user_id)->first();
    }

    private static function getPostComments($post_id)
    {
        return Comment::select('user_id', 'comment', 'created_at')->where('post_id', $post_id)->get();
    }
    public function LikePost($postId, $userId)
    {
        $postId = (int) filter_var($postId, FILTER_SANITIZE_NUMBER_INT);
         
        $userId = (int) filter_var($userId, FILTER_SANITIZE_NUMBER_INT);
        
        $Like = new Like();
        $Like->user_id = $userId;
        $Like->post_id = $postId;
        try
        {
            $Like->save();
        }
        catch(\Exception $e)
        {
            $error = "AlreadyLikedPost";
            return redirect('/user/single_post/'.$postId.'/'.$error);
        }
        
        $liked = 'yes';
        return redirect('/user/single_post/'.$postId.'/'.$liked);
    }

    public function UnlikePost(Request $request)
    {
        Like::where([
            ['user_id', $request->user_id],
            ['post_id', $request->post_id]
            ])->delete();
        return redirect('/user/single_post/'.$request->post_id);
    }

    public function Comment(Request $request)
    {

        $comment = self::fillCommentAttributes($request);
        $comment->save();

        return redirect('/user/single_post/'.$request->postID);

    }

    private static function fillCommentAttributes($request)
    {
        $comment = new Comment();

        $comment->user_id = $request->userID;
        $comment->post_id = $request->postID;
        $comment->comment = $request->message;

        return $comment;
    }
}