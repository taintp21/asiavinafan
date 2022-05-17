@extends('backend.layouts.app')
@section('title','Edit category | Admin Panel')
@section('plugins.BsCustomFileInput', true)
@section('content_header')
    <h1>Edit category</h1>
    @include('backend.breadcrumbs')
@stop
@section('content')
    <div class="row">
        <div class="col-md-4 text-center">
            <img @if($data->images == '')src="https://res.cloudinary.com/dxzwdejly/image/upload/v1652371045/no-image-icon-23483_yxbitv.png"@else src="{{$data->images}}"@endif id="preview-image-before-upload" width="250px" alt="{{$data->name}}">
        </div>
        <form class="col-md-8" action="{{ route('categories.update',['id'=>$data->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter category name" onkeyup="ChangeToSlug();" value="{{$data->name}}">
            </div>
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" class="form-control" name="slug" id="slug" value="{{$data->slug}}" readonly>
            </div>
            <div class="form-group">
                <label for="images">Upload image</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="images" id="images">
                        <label class="custom-file-label" for="images">Choose image file</label>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Update</button>
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
            });
        });
    </script>
@stop
