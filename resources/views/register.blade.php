@extends('layout.master')

@section('page_title','Register')


@section('header')

@include('includes.header')

@endsection

@section('container')
<!-- catg header banner section -->
<section id="aa-catg-head-banner">
  <img src="{{url('public/img/fashion/fashion-header-bg-8.jpg')}}" alt="fashion img">
  <div class="aa-catg-head-banner-area">
    <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Account Page</h2>
        <ol class="breadcrumb">
          <li><a href="{{'home'}}">Home</a></li>
          <li class="active">Account</li>
        </ol>
      </div>
    </div>
  </div>
</section>
<!-- / catg header banner section -->

<!-- Cart view section -->
<section id="aa-myaccount">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="aa-myaccount-area">
          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
              <div class="aa-myaccount-register">
                <h4>Register</h4>
                <!-- success message -->
                @if(Session::has('message'))
                <div class="alert alert-success">
                  {{ Session::get('message') }}
                </div>
                @endif
                <!-- error message -->
                @if (Session::has('errors'))
                <div class="alert alert-danger">
                  @foreach ($errors->all() as $error)
                  {{ $error }}<br />
                  @endforeach
                </div>
                @endif

                <form action="{{'signup'}}" class="aa-login-form" method="post">
                  @csrf
                  <label for="">Name<span>*</span></label>
                  <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Username">
                  <label for="">Email address<span>*</span></label>
                  <input type="email" name="email" class="form-control" value="{{old('email')}}" placeholder="email">
                  <label for="">Password<span>*</span></label>
                  <input type="password" name="password" class="form-control" value="{{old('password')}}" placeholder="Password">
                  <button type="submit" class="aa-browse-btn">Register</button>
                </form>
              </div>
            </div>
            <div class="col-md-4"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- / Cart view section -->
@endsection



@section('footer')
@include('includes.footer')
@endsection