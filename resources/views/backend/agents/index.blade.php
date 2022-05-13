@extends('backend.layouts.app')
@section('title', 'Categories | Admin Panel')
@section('plugins.Datatables', true)
@section('plugins.Sweetalert2', true)
@section('content_header')
    <h1>Agents</h1>
    @include('backend.breadcrumbs')
@stop
@section('content')
    <div class="mb-3">
        <a class="btn btn-success" href="{{url('/admin/agents/create')}}"><i class="fa-solid fa-plus"></i> Create new</a>
    </div>
    <table class="table table-bordered" id="{{Request::segment(2)}}">
        <thead>
            <tr>
                <th width="100px">#</th>
                <th>Name</th>
                <th>Location</th>
                <th>Phone</th>
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
                    <td>{{$r->location}}</td>
                    <td>{{$r->phone}}</td>
                    <td>
                        <a href="{{url('/admin/agents/edit/'.$r->id)}}"><i class="fa-solid fa-pen-to-square fa-lg"></i></a>
                        &nbsp;&nbsp;
                        <a href="#" onclick="deleteItem(this)" data-id="{{$r->id}}"><i class="fa-solid fa-trash-can fa-lg"></i></a>
                    </td>
                </tr>
            @endforeach
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
            var self = "{{ url('/admin/agents/delete') }}";
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
