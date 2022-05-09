<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <a class="btn btn-primary" href="{{url('/admin/categories/create')}}">Add new</a>
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Images</th>
                </tr>
            </thead>
            <tbody>
                @php $order = 0; @endphp
                @forelse ($data as $r)
                    @php $order++; @endphp
                    <tr>
                        <th>{{$order}}</th>
                        <td>{{$r->name}}</td>
                        <td>{{$r->slug}}</td>
                        <td><img src="{{$r->images}}" height="100px"></td>
                    </tr>
                @empty
                    <p class="text-center">No data found</p>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>
