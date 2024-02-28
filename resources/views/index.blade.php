

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Admin Dashboard</title>
</head>
<body class="p-5">
   <table class="table table-bordered">
    <h1 class="text-center mb-3">SNEAKERSPHERE ADMIN</h1>
    @if (Session::has('success'))
    <div class="alert alert-success text-center" role="alert">
        {{Session::get('success')}}
    </div>
     @endif
    <div class="float-end mb-3">
        <a href="{{route('create')}}" class="btn btn-primary shadow">Add New Product</a>
        <a href="{{route('/')}}" class="btn btn-primary shadow">Logout</a>
    </div>
   <thead class="text-center">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Image</th>
            <th>Description</th>
            <th>Price</th>
            <th class="text-center">Actions</th>
        </tr>
    </thead>

    <tbody class="text-center">
        @forelse($shoes as $shoe)
        <tr>
            <td>{{$shoe->id}}</td>
            <td style="font-size: 20px;">{{$shoe->name}}</td>
            <td><img src="{{asset('images')}}/{{ $shoe->image}}" style="height: 100px;" style="width: 50px;"></td>
            <td>{{$shoe->description}}</td>
            <td>₱{{$shoe->price}}</td>
            <td class="text-center" style="width: 250px;">
                <form action="{{route('destroy',$shoe->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{route('edit',$shoe->id)}}" class="btn-success btn shadow">Edit</a>
                    <a href="{{route('show',$shoe->id)}}" class="btn-info btn shadow">Show</a>
                    <button type="submit" class="btn-danger btn mt-1 shadow">Delete</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5" class="text-center">No Products Added</td>
        </tr>
        @endforelse
    </tbody>


   </table>
</body>
</html>

