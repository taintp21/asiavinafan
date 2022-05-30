@extends('backend.layouts.app')
@section('title','Products | Admin Panel')
@section('plugins.Datatables', true)
@section('plugins.Sweetalert2', true)
@section('content_header')
    <h1>Products</h1>
    @include('backend.breadcrumbs')
@stop
@section('css')
    <style>
        td > table{
            border: none;
        }
        td > table td{
            border-top: none!important;
        }
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
        <a class="btn btn-success" href="{{route('products.create')}}"><i class="fa-solid fa-plus"></i> Create new</a>
    </div>
    <table class="table" id="{{Request::segment(2)}}">
        <thead>
            <tr>
                <th width="100px">#</th>
                <th>Category</th>
                <th>Name</th>
                <th>Image</th>
                <th>Technical Specifications</th>
                <th>Switch Height</th>
                <th>Thermal Fuse Protection</th>
                <th>Price</th>
                <th width="100px">Action</th>
            </tr>
        </thead>
        <tbody>
            @php $order = 0; @endphp
            @foreach ($data as $r)
                @php $order++; @endphp
                <tr>
                    <th>{{$order}}</th>
                    <td>{{DB::table("categories")->select("name")->where("id","=",$r->cateId)->first()->name}}</td>
                    <td>{{$r->name}}</td>
                    <td><img src="{{$r->images}}" height="100px"></td>
                    <td>{!! $r->technical_specifications !!}</td>
                    <td>@if($r->switch_height == 1) Yes @else No @endif</td>
                    <td>@if($r->thermal_fuse_protection == 1) Yes @else No @endif</td>
                    <td>{{number_format($r->price, 0, '', ',')}} &#8363;</td>
                    <td>
                        <a class="btn btn-warning btn-sm" href="{{route('products.edit', ['id' => $r->id])}}"><i class="fa-solid fa-pen-to-square"></i></a>
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
            var self = "{{ url('/admin/products/delete') }}" + "/" + id;
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
