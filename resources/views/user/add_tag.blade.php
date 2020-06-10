@extends('layout')

@section('content')
<!-- ##### Breadcrumb Area Start ##### -->
<!-- <div>
    {{ Session::get('key') }}

</div> -->
<div class="vizew-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Tag</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
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
                        <h4>You Can Add New Tag </h4>
                        <div class="line"></div>

                    </div>

                    <form action="/add-tag" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Tag Name..." name="tagName">
                        </div>
                        @if(isset($error))
                            <h4>{{ $error }}</h4>
                        @endif
                        <button type="submit" class="btn vizew-btn w-100 mt-30">Add Tag</button>
                    </form>
                </div>
                <br><br>
                <div class="section-heading">
                <h4>Tags:</h4>
                <div class="line"></div>
                <br><br>
                @foreach($tags as $tag)
                <p style="font-size:20px;"class="post-cata cata-sm cata-success">{{ $tag->name }}<a href="/add-tag/{{$tag->id}}"><img src="{{asset('frontend/img/core-img/x-mark.png')}}" style="width:20px;margin-left:10px;"></a></p>
                
                @endforeach
                </div>
               
                
            </div>
        </div>
    </div>
</div>
<!-- ##### Login Area End ##### -->
@endsection 