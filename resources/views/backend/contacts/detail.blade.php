@extends('backend.layouts.app')
@section('title', 'Detail | Admin Panel')
@section('plugins.Datatables', true)
@section('plugins.Sweetalert2', true)
@section('content_header')
    <h1>Detail</h1>
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
    <p><b>Name</b> <span style="margin-left: 1.5rem;">{{$data->nameContact}}</span></p>
    <p><b>Email</b> <span style="margin-left: 1.5rem;">{{$data->emailContact}}</span></p>
    <p><b>Content</b></p>
    <p>{{$data->contentContact}}</p>
    <hr>
    <div class="email-reply mb-3">
        <form id="replyForm" action="{{ route('contacts.send',['id'=>$data->id]) }}" method="POST" style="display: none" data-flag="0">
            @csrf
            <input type="hidden" name="nameContact" value="{{$data->nameContact}}">
            <input type="hidden" name="emailContact" value="{{$data->emailContact}}">
            <input type="hidden" name="contentContact" value="{{$data->contentContact}}">
            <div class="form-group">
                <label for="content">Reply to: <span class="font-weight-normal">{{$data->emailContact}}</span></label>
                <textarea class="form-control" name="reply" id="reply" rows="25"></textarea>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary" data-id="{{$data->id}}">Send</button>
            </div>
        </form>
        @if (\Session::has('success'))
            <p class="text-success font-weight-bold">{!! \Session::get('success') !!}</p>
        @endif
        <button class="btn btn-warning" id="replyToggle">Reply this email</button>
    </div>
@stop
@section('js')
<script>
    tinymce.init({
        selector: '#reply',
        height: "300px",
        plugins: 'table',
    });
    $(document).ready(function(){
        $("#replyToggle").click(function(){
            $("#replyForm").toggle(200);
            $("#replyToggle").hide();
        });
    });
    const form = $("#replyForm");
    form.submit(function(e){
        if(form.attr('data-flag') == 0){
            e.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, send it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: 'Sent!',
                        html: 'Your content has been sent to <b>{{$data->emailContact}}</b>',
                        icon: 'success',
                    }).then(function() {
                        form.attr('data-flag', '1');
                        form.submit();
                    });
                }
            });
        }
    });
  </script>
@stop
