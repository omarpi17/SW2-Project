@extends('layout')

@section('content')
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
                        <h4> Music </h4>
                    </div>
                    <!-- View Options -->
                    {{-- <div class="view-options">
                        <a href="archive-grid.html"><i class="fa fa-th-large" aria-hidden="true"></i></a>
                        <a href="archive-list.html" class="active"><i class="fa fa-list-ul" aria-hidden="true"></i></a>
                    </div> --}}
                </div>

                <!-- Single Post Area -->
                <div class="single-post-area style-2">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-6">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="{{asset('frontend/img/bg-img/21.jpg')}}" alt="">

                                <!-- Video Duration -->
                                <span class="video-duration">05.03</span>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <!-- Post Content -->
                            <div class="post-content mt-0">
                                <a href="#" class="post-cata cata-sm cata-success">Sports</a>
                                <a href="{{url('/user/single_post')}}" class="post-title mb-2">May fights on after Johnson savages Brexit approach</a>
                                <div class="post-meta d-flex align-items-center mb-2">
                                    <a href="#" class="post-author">By Jane</a>
                                    <i class="fa fa-circle" aria-hidden="true"></i>
                                    <a href="#" class="post-date">Sep 08, 2018</a>
                                </div>
                                <p class="mb-2">Quisque mollis tristique ante. Proin ligula eros, varius id tristique sit amet, rutrum non ligula.</p>
                                <div class="post-meta d-flex">
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 32</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 42</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 7</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Post Area -->
                <div class="single-post-area style-2">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-6">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="{{asset('frontend/img/bg-img/22.jpg')}}" alt="">

                                <!-- Video Duration -->
                                <span class="video-duration">05.03</span>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <!-- Post Content -->
                            <div class="post-content mt-0">
                                <a href="#" class="post-cata cata-sm cata-danger">Game</a>
                                <a href="{{url('/user/single_post')}}" class="post-title mb-2">Thailand cave rescue: Boys 'doing well' after spending night</a>
                                <div class="post-meta d-flex align-items-center mb-2">
                                    <a href="#" class="post-author">By Jane</a>
                                    <i class="fa fa-circle" aria-hidden="true"></i>
                                    <a href="#" class="post-date">Sep 08, 2018</a>
                                </div>
                                <p class="mb-2">Quisque mollis tristique ante. Proin ligula eros, varius id tristique sit amet, rutrum non ligula.</p>
                                <div class="post-meta d-flex">
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 32</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 42</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 7</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Post Area -->
                <div class="single-post-area style-2">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-6">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="{{asset('frontend/img/bg-img/23.jpg')}}" alt="">

                                <!-- Video Duration -->
                                <span class="video-duration">05.03</span>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <!-- Post Content -->
                            <div class="post-content mt-0">
                                <a href="#" class="post-cata cata-sm cata-primary">Business</a>
                                <a href="{{url('/user/single_post')}}" class="post-title mb-2">Theresa May battles Brexiteer backlash amid disquiet</a>
                                <div class="post-meta d-flex align-items-center mb-2">
                                    <a href="#" class="post-author">By Jane</a>
                                    <i class="fa fa-circle" aria-hidden="true"></i>
                                    <a href="#" class="post-date">Sep 08, 2018</a>
                                </div>
                                <p class="mb-2">Quisque mollis tristique ante. Proin ligula eros, varius id tristique sit amet, rutrum non ligula.</p>
                                <div class="post-meta d-flex">
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 32</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 42</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 7</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Post Area -->
                <div class="single-post-area style-2">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-6">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="{{asset('frontend/img/bg-img/24.jpg')}}" alt="">

                                <!-- Video Duration -->
                                <span class="video-duration">05.03</span>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <!-- Post Content -->
                            <div class="post-content mt-0">
                                <a href="#" class="post-cata cata-sm cata-danger">Game</a>
                                <a href="{{url('/user/single_post')}}" class="post-title mb-2">Theresa May warned Brexit strategy 'risks putting Jeremy Corbyn</a>
                                <div class="post-meta d-flex align-items-center mb-2">
                                    <a href="#" class="post-author">By Jane</a>
                                    <i class="fa fa-circle" aria-hidden="true"></i>
                                    <a href="#" class="post-date">Sep 08, 2018</a>
                                </div>
                                <p class="mb-2">Quisque mollis tristique ante. Proin ligula eros, varius id tristique sit amet, rutrum non ligula.</p>
                                <div class="post-meta d-flex">
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 32</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 42</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 7</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Post Area -->
                <div class="single-post-area style-2">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-6">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="{{asset('frontend/img/bg-img/21.jpg')}}" alt="">

                                <!-- Video Duration -->
                                <span class="video-duration">05.03</span>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <!-- Post Content -->
                            <div class="post-content mt-0">
                                <a href="#" class="post-cata cata-sm cata-success">Sports</a>
                                <a href="{{url('/user/single_post')}}" class="post-title mb-2">May fights on after Johnson savages Brexit approach</a>
                                <div class="post-meta d-flex align-items-center mb-2">
                                    <a href="#" class="post-author">By Jane</a>
                                    <i class="fa fa-circle" aria-hidden="true"></i>
                                    <a href="#" class="post-date">Sep 08, 2018</a>
                                </div>
                                <p class="mb-2">Quisque mollis tristique ante. Proin ligula eros, varius id tristique sit amet, rutrum non ligula.</p>
                                <div class="post-meta d-flex">
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 32</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 42</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 7</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Post Area -->
                <div class="single-post-area style-2">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-6">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="{{asset('frontend/img/bg-img/22.jpg')}}" alt="">

                                <!-- Video Duration -->
                                <span class="video-duration">05.03</span>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <!-- Post Content -->
                            <div class="post-content mt-0">
                                <a href="#" class="post-cata cata-sm cata-danger">Game</a>
                                <a href="{{url('/user/single_post')}}" class="post-title mb-2">Thailand cave rescue: Boys 'doing well' after spending night</a>
                                <div class="post-meta d-flex align-items-center mb-2">
                                    <a href="#" class="post-author">By Jane</a>
                                    <i class="fa fa-circle" aria-hidden="true"></i>
                                    <a href="#" class="post-date">Sep 08, 2018</a>
                                </div>
                                <p class="mb-2">Quisque mollis tristique ante. Proin ligula eros, varius id tristique sit amet, rutrum non ligula.</p>
                                <div class="post-meta d-flex">
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 32</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 42</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 7</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Post Area -->
                <div class="single-post-area style-2">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-6">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="{{asset('frontend/img/bg-img/23.jpg')}}" alt="">

                                <!-- Video Duration -->
                                <span class="video-duration">05.03</span>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <!-- Post Content -->
                            <div class="post-content mt-0">
                                <a href="#" class="post-cata cata-sm cata-primary">Business</a>
                                <a href="{{url('/user/single_post')}}" class="post-title mb-2">Theresa May battles Brexiteer backlash amid disquiet</a>
                                <div class="post-meta d-flex align-items-center mb-2">
                                    <a href="#" class="post-author">By Jane</a>
                                    <i class="fa fa-circle" aria-hidden="true"></i>
                                    <a href="#" class="post-date">Sep 08, 2018</a>
                                </div>
                                <p class="mb-2">Quisque mollis tristique ante. Proin ligula eros, varius id tristique sit amet, rutrum non ligula.</p>
                                <div class="post-meta d-flex">
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 32</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 42</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 7</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Post Area -->
                <div class="single-post-area style-2">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-6">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src=""{{asset('frontend/img/bg-img/24.jpg')}}" alt="">

                                <!-- Video Duration -->
                                <span class="video-duration">05.03</span>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <!-- Post Content -->
                            <div class="post-content mt-0">
                                <a href="#" class="post-cata cata-sm cata-danger">Game</a>
                                <a href="{{url('/user/single_post')}}" class="post-title mb-2">Theresa May warned Brexit strategy 'risks putting Jeremy Corbyn</a>
                                <div class="post-meta d-flex align-items-center mb-2">
                                    <a href="#" class="post-author">By Jane</a>
                                    <i class="fa fa-circle" aria-hidden="true"></i>
                                    <a href="#" class="post-date">Sep 08, 2018</a>
                                </div>
                                <p class="mb-2">Quisque mollis tristique ante. Proin ligula eros, varius id tristique sit amet, rutrum non ligula.</p>
                                <div class="post-meta d-flex">
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 32</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 42</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 7</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Post Area -->
                <div class="single-post-area style-2">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-6">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="{{asset('frontend/img/bg-img/22.jpg')}}" alt="">

                                <!-- Video Duration -->
                                <span class="video-duration">05.03</span>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <!-- Post Content -->
                            <div class="post-content mt-0">
                                <a href="#" class="post-cata cata-sm cata-danger">Game</a>
                                <a href="{{url('/user/single_post')}}" class="post-title mb-2">Thailand cave rescue: Boys 'doing well' after spending night</a>
                                <div class="post-meta d-flex align-items-center mb-2">
                                    <a href="#" class="post-author">By Jane</a>
                                    <i class="fa fa-circle" aria-hidden="true"></i>
                                    <a href="#" class="post-date">Sep 08, 2018</a>
                                </div>
                                <p class="mb-2">Quisque mollis tristique ante. Proin ligula eros, varius id tristique sit amet, rutrum non ligula.</p>
                                <div class="post-meta d-flex">
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 32</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 42</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 7</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Post Area -->
                <div class="single-post-area style-2">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-6">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="{{asset('frontend/img/bg-img/23.jpg')}}" alt="">

                                <!-- Video Duration -->
                                <span class="video-duration">05.03</span>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <!-- Post Content -->
                            <div class="post-content mt-0">
                                <a href="#" class="post-cata cata-sm cata-primary">Business</a>
                                <a href="{{url('/user/single_post')}}" class="post-title mb-2">Theresa May battles Brexiteer backlash amid disquiet</a>
                                <div class="post-meta d-flex align-items-center mb-2">
                                    <a href="#" class="post-author">By Jane</a>
                                    <i class="fa fa-circle" aria-hidden="true"></i>
                                    <a href="#" class="post-date">Sep 08, 2018</a>
                                </div>
                                <p class="mb-2">Quisque mollis tristique ante. Proin ligula eros, varius id tristique sit amet, rutrum non ligula.</p>
                                <div class="post-meta d-flex">
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 32</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 42</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 7</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Post Area -->
                <div class="single-post-area style-2">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-6">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="{{asset('frontend/img/bg-img/24.jpg')}}" alt="">

                                <!-- Video Duration -->
                                <span class="video-duration">05.03</span>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <!-- Post Content -->
                            <div class="post-content mt-0">
                                <a href="#" class="post-cata cata-sm cata-danger">Game</a>
                                <a href="{{url('/user/single_post')}}" class="post-title mb-2">Theresa May warned Brexit strategy 'risks putting Jeremy Corbyn</a>
                                <div class="post-meta d-flex align-items-center mb-2">
                                    <a href="#" class="post-author">By Jane</a>
                                    <i class="fa fa-circle" aria-hidden="true"></i>
                                    <a href="#" class="post-date">Sep 08, 2018</a>
                                </div>
                                <p class="mb-2">Quisque mollis tristique ante. Proin ligula eros, varius id tristique sit amet, rutrum non ligula.</p>
                                <div class="post-meta d-flex">
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 32</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 42</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 7</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <div class="sidebar-area">

                    <!-- ***** Single Widget ***** -->
                    <div class="single-widget followers-widget mb-50">
                        <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span class="counter">198</span><span>Fan</span></a>
                        <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span class="counter">220</span><span>Followers</span></a>
                        <a href="#" class="google"><i class="fa fa-google" aria-hidden="true"></i><span class="counter">140</span><span>Subscribe</span></a>
                    </div>

                    <!-- ***** Single Widget ***** -->
                   

                       

                  


                      
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Archive List Posts Area End ##### -->
@endsection