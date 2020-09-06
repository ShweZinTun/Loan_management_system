@extends("layouts.app")
@section('content')
<div class="col-lg-12">
<div class="row">
<a href="/admins/create">New Admin</a>
<table class="table table-success">
    <thead>
        <th>Name</th>
        <th>Organisation</th>
        <th>Customer</th>
        
        <th>Action</th>
    </thead>
    <tbody>
        @foreach($admins as $admin)
        <tr>
            <td>{{$admin->name}}</td>
            <td>{{$admin->organisation_id}}</td>
            <td>{{$admin->customer_id}}</td>
            <td>
            <form action="{{route('admins.destroy', $admin->id)}}" method="POST">
                <a class="btn btn-primary" href="{{route('admins.edit', $admin->id)}}">Edit</a>
                @csrf 
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>
@endsection