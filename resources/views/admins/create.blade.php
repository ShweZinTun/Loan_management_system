@extends("layouts.app")
@section('content')
<div class="col-lg-12">
<form action="/admins" method="post">
@csrf
<div class="row">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</div>
<div>
    <div class="form-group">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" style="width: 300px;" />
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    <div class="form-group">
        <label>Organisation</label>
        <select name="organisation_id" class="form-control" style="width:300px;">
            <option>Select name</option>
            @foreach($organisations as $organisation)
            <option value="{{$organisation->id}}">{{$organisation->name}}</option>
            @endforeach
        </select> 
    </div>
    <div class="form-group">
        <label>Record ID</label>
        <select name="record_id" class="form-control" style="width:300px;">
            <option>Select name</option>
            @foreach($records as $record)
            <option value="{{$record->id}}">{{$record->id}}</option>
            @endforeach
        </select> 
    </div>
    <div class="form-group">
        <label>Customer </label>
        <select name="customer_id" class="form-control" style="width:300px;">
            <option>Select name</option>
            @foreach($customers as $customer)
            <option value="{{$customer->id}}">{{$customer->name}}</option>
            @endforeach
        </select> 
    </div>
    <div class="form-group">
        <input type="submit" value="Register" />
    </div>
</div>
</form>
</div>
@endsection