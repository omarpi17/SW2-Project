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
                        <li class="breadcrumb-item active" aria-current="page">Edit Post</li>
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
                      @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                         @endif
                        <h4>Edit Post </h4>
                        <div class="line"></div>

                    </div>
                <form action="/edit-post/{{$post->id}}" method="post">
                        <div class="form-group">
                        <input type="text" value="{{$post->header}}" class="form-control" id="exampleInputEmail1" placeholder="Header" name="header">
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" placeholder="content" id="exampleInputEmail1"  name="content" >
                                {{$post->content}}
                            </textarea>
                        </div>

                        <button type="submit" class="btn vizew-btn w-100 mt-30">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Login Area End ##### -->

@endsection 