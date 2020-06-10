<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;
use App\Repositories\PostRepository;

use Illuminate\Http\Request;

class UserPostManagement extends Controller
{
    private $post;

    public function __construct(PostRepository $post)
    {
        $this->post = $post;
    }

    public function CreatePost(Request $req)
    {
        // check if request is vaild
        $req->validate([
            'header' => 'required',
            'content' => 'required',
        ]);
        
        $postAttributes = $this->getPostAttributes($req);

        $this->post->create($postAttributes);

        return redirect('/profile');

    }

    private function getPostAttributes(Request $req)
    {
        return array(
            'header' => $req->header,
            'content' => $req->content,
            'user_id' => request()->session()->get('user')->id,
            'tag_id' => $req->tag_id,
            'time_to_read' => $this->getTimeToRead(request()->input('content'))
        );
    }
   
    private function getTimeToRead(String $text)
    {
       $timeToRead = (int) (strlen($text) / 25 / 60);
       if($timeToRead == 0)
           return 1;
        return $timeToRead;
    }

    public function Update(request $req, $id)
    {

        // check if request is vaild
        $req->validate([
            'header' => 'required',
            'content' => 'required',
        ]);

        // edit post
        $postAttributes = array(
            'header' => $req->header,
            'content' => $req->content
        );
        $this->post->update($id, $postAttributes);

        return redirect('/profile')->with('sucsess', 'post ubdated');

    }

    public function Delete($id)
    {
        $this->post->delete($id);

        return redirect('/profile');
    }
    
    public function GetEditView($id)
    {
        
        $post = Post::where('id', $id)->first();

        return view('user.edit_post', ['post' => $post]);

    }
}
