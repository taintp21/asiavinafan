@extends('backend.layouts.app')
@section('title','Promotions | Admin Panel')
@section('plugins.Datatables', true)
@section('plugins.Sweetalert2', true)
@section('content_header')
    <h1>Promotions</h1>
    @include('backend.breadcrumbs')
@stop
@section('css')
    <style>
        .truncate{
            color: black;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
@stop
@section('content')
    <div class="mb-3">
        <a class="btn btn-success" href="{{route('promotions.create')}}"><i class="fa-solid fa-plus"></i> Create new</a>
    </div>
    <table class="table" id="{{Request::segment(2)}}">
        <thead>
            <tr>
                <th width="100px">#</th>
                <th>Title</th>
                <th>Slug</th>
                <th>Image</th>
                <th>Short Content</th>
                <th>Content</th>
                <th>On sale</th>
                <th>User</th>
                <th>Updated at</th>
                <th width="100px">Action</th>
            </tr>
        </thead>
        <tbody>
            @php $order = 0; @endphp
            @foreach ($data as $r)
                @php $order++; @endphp
                <tr>
                    <td>{{$order}}</td>
                    <td><span class="truncate">{{$r->title}}</span></td>
                    <td><span class="truncate">{{$r->slug}}</span></td>
                    <td><img src="{{$r->image}}" height="100px"></td>
                    <td><span class="truncate">{!!$r->short_content!!}</span></td>
                    <td><span class="truncate">{!!$r->content!!}</span></td>
                    <td>@if ($r->sale == 1) Yes @else No @endif</td>
                    <td>{{DB::table('users')->select("name")->where("id","=",$r->userId)->first()->name}}</td>
                    <td>{{$r->updated_at}}</td>
                    <td>
                        <a class="btn btn-warning btn-sm" href="{{route('promotions.edit', ['id' => $r->id])}}"><i class="fa-solid fa-pen-to-square"></i></a>
                        &nbsp;&nbsp;
                        <a class="btn btn-danger btn-sm" href="#" onclick="deleteItem(this)" data-id="{{$r->id}}"><i class="fa-solid fa-trash-can"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
@section('js')
    <script>
        $(document).ready(function() {
            $("#{{Request::segment(2)}}").DataTable({order: [[0, 'desc']]});
        });
        function deleteItem(e){
            let id = e.getAttribute('data-id');
            var self = "{{ url('/admin/promotions/delete') }}" + "/" + id;
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Deleted!',
                        'Your data has been deleted.',
                        'success',
                    ).then(function() {
                        location.href = self;
                    });
                }
            });
        }
    </script>
@stop
