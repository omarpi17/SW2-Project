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
                        <li class="breadcrumb-item active" aria-current="page">Add Post</li>
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
                        <h4>You Can Add New post </h4>
                        <div class="line"></div>

                    </div>

                    <form action="/add-post" method="post">
                        <div class="form-group">
                            <label>Post Header:</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Header" name="header">
                        </div>

                     <div class="form-group">
                        <label>Post Tag:</label>
                            <select type="text" class="form-control" id="exampleInputEmail1" placeholder="tag" name="tag_id">
                          @foreach ($tags as $tag)
                            <option value="{{$tag->id}}" >
                            {{$tag->name}}
                            </options>

                            @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Post Content:</label>
                            <textarea class="form-control" placeholder="content" id="exampleInputEmail1"  name="content" >
                            </textarea>
                        </div>
                        <!-- <div class="form-group">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                    <label class="custom-control-label" for="customControlAutosizing">Remember me</label>
                                </div>
                            </div> -->

                        <button type="submit" class="btn vizew-btn w-100 mt-30">Add Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ##### Login Area End ##### -->
@endsection 