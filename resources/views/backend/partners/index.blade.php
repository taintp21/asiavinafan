@extends('backend.layouts.app')
@section('title', 'Partners | Admin Panel')
@section('plugins.Datatables', true)
@section('plugins.Sweetalert2', true)
@section('content_header')
    <h1>Partners</h1>
    @include('backend.breadcrumbs')
@stop
@section('css')
    <style>
        .img-partner{
            background: #4677AB;
            height: 100px;
            border-radius: 10px;
            margin-bottom: 30px;
            width: 50%;
        }
        .img-partner img {
            height: 100%;
            width: 100%;
            object-fit: scale-down;
        }
    </style>
@stop
@section('content')
    <div class="mb-3">
        <a class="btn btn-success" href="{{route('partners.create')}}"><i class="fa-solid fa-plus"></i> Create new</a>
    </div>
    <table class="table" id="{{Request::segment(2)}}">
        <thead>
            <tr>
                <th width="50px">#</th>
                <th width="150px">Image</th>
                <th width="100px">Action</th>
            </tr>
        </thead>
        <tbody>
            @php $order = 0; @endphp
            @foreach ($data as $r)
                @php $order++; @endphp
                <tr>
                    <th>{{$order}}</th>
                    <td>
                        <div class="img-partner"><img src="{{$r->images}}" height="100px"></div>
                    </td>
                    <td>
                        <a class="btn btn-warning btn-sm" href="{{route('partners.edit', ['id' => $r->id])}}"><i class="fa-solid fa-pen-to-square"></i></a>
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
            var self = "{{ url('/admin/partners/delete') }}";
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
