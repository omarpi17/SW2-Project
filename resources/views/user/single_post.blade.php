@extends('layout')

@section('content')
 <!-- ##### Breadcrumb Area Start ##### -->
 <div class="vizew-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="#">User</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Single Post</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Post Details Area Start ##### -->
<section class="post-details-area mb-80">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="post-details-thumb mb-50">
                    <img src="{{asset('frontend/img/bg-img/34.jpg')}}" alt="">
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <!-- Post Details Content Area -->
            <div class="col-12 col-lg-8 col-xl-7">
                <div class="post-details-content">
                    <!-- Blog Content -->
                    <div class="blog-content">

                        <!-- Post Content -->
                        <div class="post-content mt-0">
                            <a href="#" class="post-cata cata-sm cata-danger">{{ $tagName->name }}</a>
                            <p class="post-title mb-2">{{ $postData->header }}</p>
                            <p class="post-title mb-2">{{ $postData->time_to_read }} min read</p>
                            <div class="d-flex justify-content-between mb-30">
                                <div class="post-meta d-flex align-items-center">
                                    <a href="#" class="post-author">By {{ $username->username }}</a>
                                    <i class="fa fa-circle" aria-hidden="true"></i>
                                    <a href="#" class="post-date">Sep 08, 2018</a>
                                </div>
                            </div>
                        </div>

                        <p>{{ $postData->content }}</p>
                        
                        @if(Session::has('user'))
                        <div class="col-12">
                            
                            @if(strpos($_SERVER['REQUEST_URI'], 'yes') !== false)
                                <form method="POST" action="UnlikePost">
                                    <input type="hidden" value="{{$postData->id}}" name="post_id">
                                    <input type="hidden" value="{{Session::get('user')->id}}" name="user_id">
                                <button class="btn vizew-btn mt-30" type="submit">
                                    Unlike Post
                                </button>
                                </form>
                                
                            @else
                                <button class="btn vizew-btn mt-30" type="submit">
                                     <a style="color:white;" href="{{ url('user/single_post/postId=').$postData->id.'&userId='.Session::get('user')->id }}">
                                        Like Post
                                    </a>
                                </button>
                            
                            @endif
        
                            @if(strpos($_SERVER['REQUEST_URI'], 'AlreadyLikedPost') !== false)
                                <h4 style="margin-top:20px;">You already liked the post.</h4>
                            @endif
                            
                        </div>
                        @endif
                        <br>

                        <!-- Comment Area Start -->
                        <div class="comment_area clearfix mb-50">

                            <!-- Section Title -->
                            <div class="section-heading style-2">
                                <h4>Comments</h4>
                                <div class="line"></div>
                            </div>

                            <ul>
                                @foreach($comments as $comment)
                                <!-- Single Comment Area -->
                                <li class="single_comment_area">
                                    <!-- Comment Content -->
                                    <div class="comment-content d-flex">
                                        <!-- Comment Author -->
                                        <div class="comment-author">
                                            <img src="{{asset('frontend/img/bg-img/31.jpg')}}" alt="author">
                                        </div>
                                        <!-- Comment Meta -->
                                        <div class="comment-meta">
                                            <a href="#" class="comment-date">{{$comment->created_at}}</a>
                                            <h6>{{$comment->commentUser->username}}</h6>
                                            <p>{{$comment->comment}}</p>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        @if(Session::has('user'))
                        <!-- Post A Comment Area -->
                        <div class="post-a-comment-area">

                            <!-- Section Title -->
                            <div class="section-heading style-2">
                                <h4>Leave a reply</h4>
                                <div class="line"></div>
                            </div>

                            <!-- Reply Form -->
                            
                            <div class="contact-form-area">
                                <form action="comment" method="post">
                                    <div class="row">
                                        <div class="col-12">
                                            <input type="hidden"  name="userID" value="{{Session::get('user')->id}}">
                                            <input type="hidden"  name="postID" value="{{$postData->id}}">
                                            <textarea name="message" class="form-control" id="message" placeholder="Message"></textarea>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn vizew-btn mt-30" type="submit">Submit Comment</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Post Details Area End ##### -->
@endsection