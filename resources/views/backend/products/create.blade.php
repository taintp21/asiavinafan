@extends('backend.layouts.app')
@section('title','Create product | Admin Panel')
@section('plugins.BootstrapSwitch', true)
@section('content_header')
    <h1>Create product</h1>
    @include('backend.breadcrumbs')
@stop
@section('css')
    <style>
        .inner::-webkit-scrollbar{display: none;}
        .tox-notification.tox-notification--in.tox-notification--warning{display: none;}
    </style>
    <script src="{{asset('js/tinymce.min.js')}}" referrerpolicy="origin"></script>
@stop
@section('content')
    <div class="row">
        <div class="col-md-4 text-center">
            <img src="https://res.cloudinary.com/dxzwdejly/image/upload/v1652371045/no-image-icon-23483_yxbitv.png" id="preview-image-before-upload" alt="preview image" width="250px">
        </div>
        <form class="col-md-8" action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="cateId">Categories</label>
                <select class="form-control select2" name="cateId">
                    @foreach ($categories as $r)
                        <option value="{{$r->id}}">{{$r->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter name product" value="{{old('name')}}">
            </div>
            <div class="form-group">
                <label for="images">Upload image</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="images" name="images">
                        <label class="custom-file-label" for="images">Choose image file</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="name">Technical Specifications</label>
                <textarea name="technical_specifications" id="technical_specifications"></textarea>
            </div>
            <div class="form-group">
                <label for="name">Featured</label>
                <textarea name="featured" id="featured"></textarea>
            </div>
            <div class="form-group">
                <label for="switch_height">Switch Height</label>
                <input type="checkbox" data-toggle="switch" name="switch_height">
            </div>
            <div class="form-group">
                <label for="thermal_fuse_protection">Thermal Fuse Protection</label>
                <input type="checkbox" data-toggle="switch" name="thermal_fuse_protection">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" name="price">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Insert</button>
            </div>
            @if (\Session::has('success'))
                <p class="text-success font-weight-bold">{!! \Session::get('success') !!}</p>
            @endif
        </form>
    </div>
@stop
@section('js')
    <script>

        tinymce.init({
            selector: '#technical_specifications',
            height: "300px",
            plugins: 'table',
            menubar: 'table',
            toolbar: 'undo redo | styleselect | forecolor | bold italic | alignleft aligncenter alignright alignjustify | numlist bullist',
            visual: false,
        });
        tinymce.init({
            selector: '#featured',
            height: "300px",
            plugins: 'table lists',
            menubar: 'table',
            toolbar: 'undo redo | styleselect | forecolor | bold italic | alignleft aligncenter alignright alignjustify | link image | numlist bullist',
            visual: false,
        });
        $(document).ready(function (e) {
            $('[data-toggle="switch"]').bootstrapSwitch('onColor','success');
            $(".select2").select2();

            $('#images').change(function(){
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#preview-image-before-upload').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);

                var fileName = $(this).val().replace(/C:\\fakepath\\/i, '');
                $(this).next('.custom-file-label').html(fileName);
            });
        });
    </script>
@stop
