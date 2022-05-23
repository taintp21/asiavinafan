@extends('backend.layouts.app')
@section('title','Create promotion | Admin Panel')
@section('plugins.BootstrapSwitch', true)
@section('content_header')
    <h1>Create promotion</h1>
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
            <img src="https://res.cloudinary.com/dxzwdejly/image/upload/v1652371045/no-image-icon-23483_yxbitv.png" id="preview-image-before-upload" alt="preview image" style="max-width: 250px;">
        </div>
        <form class="col-md-8" action="{{ route('promotions.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Enter title" value="{{old('title')}}" onkeyup="ChangeTitleToSlug();" autofocus>
            </div>
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" class="form-control" name="slug" id="slug" value="{{old('slug')}}" readonly>
            </div>
            <div class="form-group">
                <label for="images">Upload image</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="image">Choose image file</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="short_content">Short Content</label>
                <textarea name="short_content" id="short_content"></textarea>
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" id="content"></textarea>
            </div>
            <div class="form-group">
                <label for="sale">On sale</label>
                <input type="checkbox" data-toggle="switch" name="sale">
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
    <script src="{{asset('js/slug.js')}}"></script>
    <script>
        tinymce.init({
            selector: '#short_content',
            height: "300px",
            visual: false,
        });
        tinymce.init({
            selector: '#content',
            height: "300px",
            plugins: 'table',
            visual: false,
        });
        $(document).ready(function (e) {
            $('[data-toggle="switch"]').bootstrapSwitch('onColor','success');
            $('#image').change(function(){
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
