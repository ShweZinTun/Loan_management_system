@extends("layouts.app")
@section('content')
<div class="col-lg-12">
<div class="row">
<a href="/organisations/create">New Organisation</a>
<table class="table table-success">
    <thead>
        <th>Name</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Amount</th>
        <th>Interest_rate</th>
        <th>Period</th>
        <th>Service</th>
        <th>Rule</th>
        <th>Saving</th>
    </thead>
    <tbody>
        @foreach($organisations as $organisation)
        <tr>
            <td>{{$organisation->name}}</td>
            <td>{{$organisation->address}}</td>
            <td>{{$organisation->phone}}</td>
            <td>{{$organisation->email}}</td>
            <td>{{$organisation->amount}}</td>
            <td>{{$organisation->interest_rate}}</td>
            <td>{{$organisation->period}}</td>
            <td>{{$organisation->service}}</td>
            <td>{{$organisation->rule}}</td>
            <td>{{$organisation->saving}}</td>
            <td>
            <form action="{{route('organisations.destroy', $organisation->id)}}" method="POST">
                <a class="btn btn-primary" href="{{route('organisations.edit', $organisation->id)}}">Edit</a>
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