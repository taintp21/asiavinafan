@extends('backend.layouts.app')
@section('title','Create new image on sliders | Admin Panel')
@section('plugins.BsCustomFileInput', true)
@section('content_header')
    <h1>Create new image on sliders</h1>
    @include('backend.breadcrumbs')
@stop
@section('content')
    <div class="row">
        <div class="col-md-4 text-center">
            <img src="https://res.cloudinary.com/dxzwdejly/image/upload/v1652371045/no-image-icon-23483_yxbitv.png" id="preview-image-before-upload" alt="preview image" width="250px">
        </div>
        <form class="col-md-8" action="{{ route('sliders.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="images">Upload image</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="images" name="images">
                        <label class="custom-file-label" for="images">Choose image file</label>
                    </div>
                </div>
            </div>
            <input type="hidden" class="form-control title" name="title" id="title">
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Insert</button>
            </div>
            @if (\Session::has('success'))
                <p class="text-success font-weight-bold">{!! \Session::get('success') !!}</p>
            @endif
        </form>
    </div>
@endsection

@section('js')
    <script src="{{asset('js/slug.js')}}"></script>
    <script>
        $(document).ready(function (e) {
            $('#images').change(function(){
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#preview-image-before-upload').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);

                var fileName = $(this).val().replace(/C:\\fakepath\\/i, '');
                $(this).next('.custom-file-label').html(fileName);
                $("#title").val(fileName.split('.').shift());
            });
        });
    </script>
@stop
