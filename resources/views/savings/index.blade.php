@extends("layouts.app")
@section('content')
<div class="col-lg-12">
<div class="row">
<a href="/savings/create">New Saving</a>
<table class="table table-success">
    <thead>
        <th>Amount</th>
        <th>Period</th>
        <th>Total Amount</th>
        <th>Action</th>
    </thead>
    <tbody>
        @foreach($savings as $saving)
        <tr>
            <td>{{$saving->amount}}</td>
            <td>{{$saving->period}}</td>
            <td>{{$saving->total_amount}}</td>
            <td>
            <form action="{{route('savings.destroy', $saving->id)}}" method="POST">
                <a class="btn btn-primary" href="{{route('savings.edit', $saving->id)}}">Edit</a>
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