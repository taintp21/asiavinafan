@extends('backend.layouts.app')
@section('title', 'Categories | Admin Panel')
@section('plugins.Datatables', true)
@section('plugins.Sweetalert2', true)
@section('content_header')
    <h1>Categories</h1>
    @include('backend.breadcrumbs')
@stop

@section('content')
    <div class="mb-3">
        <a class="btn btn-success" href="{{route('categories.create')}}"><i class="fa-solid fa-plus"></i> Create new</a>
    </div>
    <table class="table" id="{{Request::segment(2)}}">
        <thead>
            <tr>
                <th width="100px">#</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Image</th>
                <th width="100px">Action</th>
            </tr>
        </thead>
        <tbody>
            @php $order = 0; @endphp
            @foreach ($data as $r)
                @php $order++; @endphp
                <tr>
                    <th>{{$order}}</th>
                    <td>{{$r->name}}</td>
                    <td>{{$r->slug}}</td>
                    <td><img src="{{$r->images}}" height="100px"></td>
                    <td>
                        <a class="btn btn-warning btn-sm" href="{{route('categories.edit', ['id' => $r->id])}}"><i class="fa-solid fa-pen-to-square"></i></a>
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
            var self = "{{ url('/admin/categories/delete') }}";
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
                        location.href = self + "/" + id;
                    });
                }
            });
        }
    </script>
@stop
