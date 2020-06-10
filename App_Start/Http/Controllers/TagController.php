<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\Http\Responses\CreateTagResponse;

class TagController extends Controller
{
    public function CreateTag(Request $request)
    {
        return new CreateTagResponse();
    }
    
    public function AddTagView()
    {

        // check if user loged in
        if (!request()->session()->get('user')) {
            return '';
        }
        // cahnge to not found page later
        $tags = Tag::all();
        return view('user.add_tag', compact('tags'));
    }

    public function DeleteTag($id)
    {
        $tag = Tag::where('id', $id)->first();
        $tag->delete();
        return redirect('/add-tag');
    }

    public function AddPostViewWithAllTags()
    {
        $tags = Tag::all();
        // check if user loged in
        if (!request()->session()->get('user')) {
            return '';
        }
        // cahnge to not found page later

        return view('user.add_post', ['tags' => $tags]);
    }
}
