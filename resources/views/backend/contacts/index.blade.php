@extends('backend.layouts.app')
@section('title', 'Contacts | Admin Panel')
@section('plugins.Datatables', true)
@section('content_header')
    <h1>Contacts</h1>
    @include('backend.breadcrumbs')
@stop
@section('content')
    <table class="table" id="{{Request::segment(2)}}">
        <thead>
            <tr>
                <th width="100px">#</th>
                <th width="150px">Name</th>
                <th width="150px">Email</th>
                <th width="150px">Content</th>
                <th width="100px">Action</th>
            </tr>
        </thead>
        <tbody>
            @php $order = 0; @endphp
            @foreach ($data as $r)
                @php $order++; @endphp
                <tr>
                    <th>{{$order}}</th>
                    <td>{{$r->nameContact}}</td>
                    <td>{{$r->emailContact}}</td>
                    <td class="text-truncate" style="max-width: 150px;">{{$r->contentContact}}</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="{{route('contacts.detail', ['id' => $r->id])}}">Detail</i></a>
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
</script>
@stop
