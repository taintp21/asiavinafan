@extends('backend.layouts.app')
@section('title','Create new agent | Admin Panel')
@section('content_header')
    <h1>Create new agent</h1>
    @include('backend.breadcrumbs')
@stop
@section('content')
<div class="container">
    <form action="{{ route('agents.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" value="{{old('name')}}" autofocus>
        </div>
        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" class="form-control" name="location" id="location" placeholder="Enter location" value="{{old('location')}}">
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter phone" value="{{old('phone')}}">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Insert</button>
        </div>
        @if (\Session::has('success'))
            <p class="text-success font-weight-bold">{!! \Session::get('success') !!}</p>
        @endif
    </form>
</div>
@stop
