@extends('layout')

@section('content')
<div class="vizew-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Profile</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <button type="submit" class="btn vizew-btn w-25 mt-30"><a href="add-post" style="color:white;">Add Post</a></button>
    @if (Session::get('user')->type == "admin")
        <button type="submit" class="btn vizew-btn w-25 mt-30"><a href="add-tag" style="color:white;">Add Tag</a></button>
        <button type="submit" class="btn vizew-btn w-25 mt-30"><a href="show_users" style="color:white;">Delete User</a></button>
    @endif
</div>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Login Area Start ##### -->
<div class="vizew-login-area section-padding-80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <div class="login-content">
                    <!-- Section Title -->
                    <div class="section-heading">
                        <h4>Welcome, {{ Session::get('user')->username }}</h4>
                        <div class="line"></div>
                    </div>

                </div>
                <div>
                    <div class="section-heading">
                        <h4>Posts</h4>
                    </div>
                    @foreach($userPosts as $userPost)
                    <div class="section-content">
                        <div class="single-post-area mb-30">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="{{asset('frontend/img/bg-img/21.jpg')}}" alt="">

                                        <!-- Video Duration -->
                                        <span class="video-duration">{{$userPost->time_to_read}} min read</span>
                                    </div>
                                    <form method="PUT" action="/edit-post/{{$userPost->id}}">
                                        <button type="submit" class="btn vizew-btn w-20 mt-30">Edit Post</button>
                                    </form>
                                    <form method="PUT" action="/delete-post/{{$userPost->id}}">
                                        <button type="submit" class="btn vizew-btn w-20 mt-30">Delete Post</button>
                                    </form>
                                    <br>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <!-- Post Content -->
                                    <div class="post-content mt-0">
                                        <a href="#" class="post-cata cata-sm cata-success">{{$userPost->tagName}}</a>
                                        <a href="{{ url('/user/single_post/'.$userPost->id) }}" class="post-title mb-2">{{$userPost->header}}</a>
                                        <div class="post-meta d-flex align-items-center mb-2">
                                            <a href="#" class="post-author">By {{ Session::get('user')->username }}</a>
                                            <i class="fa fa-circle" aria-hidden="true"></i>
                                            <a href="#" class="post-date">{{$userPost->created_at}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    @endforeach
                </div>
                <div>
                    <div class="section-heading">
                        <h4>Liked Posts</h4>
                    </div>
                    @foreach($likedPosts as $likedPost)
                    <div class="section-content">
                        <div class="single-post-area mb-30">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="{{asset('frontend/img/bg-img/21.jpg')}}" alt="">

                                        <!-- Video Duration -->
                                        <span class="video-duration">{{$likedPost->time_to_read}} min read</span>
                                    </div>
                                    <form method="PUT" action="/edit-post/{{$likedPost->id}}">
                                        <button type="submit" class="btn vizew-btn w-20 mt-30">Edit Post</button>
                                    </form>
                                    <form method="PUT" action="/delete-post/{{$likedPost->id}}">
                                        <button type="submit" class="btn vizew-btn w-20 mt-30">Delete Post</button>
                                    </form>
                                    <br>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <!-- Post Content -->
                                    <div class="post-content mt-0">
                                        <a href="#" class="post-cata cata-sm cata-success">{{$likedPost->tagName}}</a>
                                        <a href="{{ url('/user/single_post/'.$likedPost->id) }}" class="post-title mb-2">{{$likedPost->header}}</a>
                                        <div class="post-meta d-flex align-items-center mb-2">
                                            <a href="#" class="post-author">By {{ $likedPost->author }}</a>
                                            <i class="fa fa-circle" aria-hidden="true"></i>
                                            <a href="#" class="post-date">{{$likedPost->created_at}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 