@extends('admin.layout.master')

@section('page_title','Admin Panel')

@section('header')
@include('admin.includes.header')
@endsection

@section('left_sidebar')
@include('admin.includes.left_sidebar')
@endsection


@section('content')
    @include('admin.includes.content')
@endsection
       


