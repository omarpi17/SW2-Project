@extends('layout')

@section('content')
<?php
                        use function GuzzleHttp\json_decode;
                        $tags = json_decode($tags);
?>  
 <!-- ##### Breadcrumb Area Start ##### -->
 <div class="vizew-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Archive List Posts Area Start ##### -->
<div class="vizew-archive-list-posts-area mb-80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">

                <!-- Archive Catagory & View Options -->
                <div class="archive-catagory-view mb-50 d-flex align-items-center justify-content-between">
                    <!-- Catagory -->
                    <div class="archive-catagory"> 

                        @foreach($tags as $tag)
                        
                            <h4>{{$tag[0]->name}}</h4><br>
                            
                            
                        
                            @for($i = 0; $i < sizeof($tag[1]); $i++)
                        <!-- Single Post Area -->
                <div class="single-post-area style-2">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-6">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="{{asset('frontend/img/bg-img/21.jpg')}}" alt="">

                                <!-- Video Duration -->
                                <span class="video-duration">{{$tag[1][$i]->time_to_read}} min read</span>
                            </div>
                        </div>
                       
                        <div class="col-12 col-md-6">
                            <!-- Post Content -->
                            <div class="post-content mt-0">

                                <a href="{{ url('/user/single_post/'.$tag[1][$i]->id) }}" class="post-title mb-2">{{$tag[1][$i]->header}}</a>
                                <div class="post-meta d-flex align-items-center mb-2">
                                    <a href="#" class="post-author">Written By: {{$tag[1][$i]->username}}</a>
                                    <i class="fa fa-circle" aria-hidden="true"></i>
                                    <a href="#" class="post-date">{{$tag[1][$i]->created_at}}</a>
                                </div>
                            </div>
                            @if (isset(Session::get('user')->type) && Session::get('user')->type == "admin")
                                <form method="PUT" action="/delete-post/{{$tag[1][$i]->id}}">
                                    <button type="submit" class="btn vizew-btn w-20 mt-30">Delete Post</button>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
                @endfor
            
                        @endforeach
                    </div>
                </div>
                
        </div>
        </div>
    </div>
</div>
<!-- ##### Archive List Posts Area End ##### -->
@endsection