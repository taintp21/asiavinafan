@extends('backend.layouts.app')
@section('title','Sliders | Admin Panel')
@section('plugins.Datatables', true)
@section('plugins.Sweetalert2', true)
@section('content_header')
    <h1>Sliders</h1>
    @include('backend.breadcrumbs')
@stop
@section('content')
    <div class="mb-3">
        <a class="btn btn-success" href="{{url('/admin/sliders/create')}}"><i class="fa-solid fa-plus"></i> Create new</a>
    </div>
    <table class="table table-bordered" id="{{Request::segment(2)}}">
        <thead>
            <tr>
                <th width="100px">#</th>
                <th>Image</th>
                <th>ImageTitle</th>
                <th width="100px">Action</th>
            </tr>
        </thead>
        <tbody>
            @php $order = 0; @endphp
            @forelse ($data as $r)
                @php $order++; @endphp
                <tr>
                    <th>{{$order}}</th>
                    <td><img src="{{$r->images}}" height="100px"></td>
                    <td>{{$r->title}}</td>
                    <td>
                        <a href="{{url('/admin/sliders/edit/'.$r->id)}}"><i class="fa-solid fa-pen-to-square fa-lg"></i></a>
                        &nbsp;&nbsp;
                        <a href="#" onclick="deleteItem(this)" data-id="{{$r->id}}"><i class="fa-solid fa-trash-can fa-lg"></i></a>
                    </td>
                </tr>
            @empty
                <p class="text-center">No data found</p>
            @endforelse
        </tbody>
    </table>
@stop
@section('js')
    <script>
        $(document).ready(function() {
            $("#{{Request::segment(2)}}").DataTable();
        });
        function deleteItem(e){
            let id = e.getAttribute('data-id');
            var self = "{{ url('/admin/sliders/delete') }}" + "/" + id;
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
