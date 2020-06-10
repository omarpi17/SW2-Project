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
                        <li class="breadcrumb-item active" aria-current="page">Login</li>
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
                        <h4>Great to have you back!</h4>
                        <div class="line"></div>

                    </div>

                    <form action="/login" method="post">
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                        </div>
                        <!-- <div class="form-group">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                    <label class="custom-control-label" for="customControlAutosizing">Remember me</label>
                                </div>
                            </div> -->
                        @if(isset($error))
                            <h4>{{ $error }}</h4>
                        @endif
                        <button type="submit" class="btn vizew-btn w-100 mt-30">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Login Area End ##### -->
@endsection 