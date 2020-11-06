@extends('layout.master')

@section('page_title', 'Login')

@section('page_heading','User Login')



@section('header')
  @include('includes.header')
@endsection  




@section('container')

<div class="col-md-4"></div>
<div class="col-md-4 loginform">
    <h1>User Login</h1>
<form action="{{'ulogin'}}" method="post">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" value="{{old('email')}}" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
</form>


</div>
<div class="col-md-4"></div>





@endsection



@section('footer')
  @include('includes.footer')
@endsection