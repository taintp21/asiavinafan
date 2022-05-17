@extends('backend.layouts.app')
@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-3 col-6">
            <div class="small-box bg-primary">
                <div class="inner">
                    <h3>{{DB::table('categories')->count();}}</h3>
                    <p>Categories</p>
                </div>
                <div class="icon">
                    <i class="fa-solid fa-briefcase"></i>
                </div>
                <a href="{{url('/admin/categories')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-secondary">
                <div class="inner">
                    <h3>{{DB::table('sliders')->count();}}</h3>
                    <p>Sliders</p>
                </div>
                <div class="icon">
                    <i class="fa-solid fa-images"></i>
                </div>
                <a href="{{url('/admin/sliders')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{DB::table('products')->count();}}</h3>
                    <p>Products</p>
                </div>
                <div class="icon">
                    <i class="fa-solid fa-box-open"></i>
                </div>
                <a href="{{url('/admin/products')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{DB::table('agents')->count();}}</h3>
                    <p>Agents</p>
                </div>
                <div class="icon">
                    <i class="fa-solid fa-people-group"></i>
                </div>
                <a href="{{url('/admin/agents')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{DB::table('partners')->count();}}</h3>
                    <p>Partners</p>
                </div>
                <div class="icon">
                    <i class="fa-solid fa-handshake"></i>
                </div>
                <a href="{{url('/admin/partners')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{DB::table('send_contact')->count();}}</h3>
                    <p>Contacts</p>
                </div>
                <div class="icon">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <a href="{{url('/admin/contacts')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
@stop
